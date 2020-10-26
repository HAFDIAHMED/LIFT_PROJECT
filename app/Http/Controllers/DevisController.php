<?php

namespace App\Http\Controllers;

use App\Devis;
use App\Events\DevisEvent;
use App\Jobs\DevisJob;
use App\Mail\DevisMail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use PDF;
use Illuminate\Http\Request;

class DevisController extends Controller
{
    public function __construct()
    {
        $this->middleware(["auth:web"])->only(["storeDevis", "merciPage", "devis_interest"]);
    }

    public function index(Request $request)
    {
        $user = auth()->user();

        if (!$user) {
            return view("devis_page.devis-immediat");
        }

        return view("devis_page.devis_page_order");
    }

    public function merciPage(Request $request, $devis)
    {
        $devisDB = Devis::where([
            "id" => $devis,
            "user_id" => auth()->user()->id
        ])->first();
        if (!$devisDB)
            return abort(404);

        return view("merci", ["devis" => $devisDB->id]);
    }

    public function getDevisPdf(Request $request, $devis)
    {
        $devisDB = Devis::where([
            "id" => $devis,
            "user_id" => auth()->user()->id
        ])->first();
        if (!$devisDB)
            return abort(404);

        $path = Storage::disk('public')->path($devisDB->devis_path);

        return Response::file($path);
    }

    public function getDevisPdfBase64(Request $request, $devis)
    {
        $devisDB = Devis::where([
            "id" => $devis,
            "user_id" => auth()->user()->id
        ])->first();
        if (!$devisDB)
            return abort(404);

        $file = Storage::disk('public')->path($devisDB->devis_path);
        $content = base64_encode(file_get_contents($file));
        return response($content)->header("Content-Type", "application/json");
    }

    public function storeDevis(Request $request)
    {
        $request->validate([
            "mesure" => "required",
            "largeur" => "required|numeric",
            "espace" => "required|numeric",
            "hauteur" => "required|numeric",
            "p_palier_base" => "required|image|mimes:jpeg,png,jpg,gif,svg",
            "p_palier_haut" => "required|image|mimes:jpeg,png,jpg,gif,svg",
            "p_ensembre" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:4048",
            "societe" => "required",
            "name" => "required",
            "phone" => "required",
            "email" => "required|email",
            "address" => "required",
            "codepostal" => "required",
            "city" => "required",
            "description",
            "created_at",
            "updated_at"
        ]);
        $user = auth()->user();
        $p_palier_base = Storage::putFileAs("public/devis/images",
            $request->file("p_palier_base"),
            "devis" . uniqid("im_devis" . $user->id . "-") . "." . $request->file("p_palier_base")->getClientOriginalExtension());
        $p_palier_base = substr($p_palier_base, 7);

        $p_palier_haut = Storage::putFileAs("public/devis/images",
            $request->file("p_palier_haut"),
            "devis" . uniqid("im_devis" . $user->id . "-") . "." . $request->file("p_palier_haut")->getClientOriginalExtension());
        $p_palier_haut = substr($p_palier_haut, 7);

        $p_ensembre = Storage::putFileAs("public/devis/images",
            $request->file("p_ensembre"),
            "devis" . uniqid("im_devis" . $user->id . "-") . "." . $request->file("p_ensembre")->getClientOriginalExtension());
        $p_ensembre = substr($p_ensembre, 7);

        $dataToStore = array_merge($request->only([
            "id",
            "mesure",
            "largeur",
            "espace",
            "hauteur",
            "societe",
            "name",
            "phone",
            "email",
            "address",
            "codepostal",
            "city",
            "description",
            "created_at",
            "updated_at"
        ]), [
            "p_palier_base" => $p_palier_base,
            "p_palier_haut" => $p_palier_haut,
            "p_ensembre" => $p_ensembre,
            "user_id" => $user->id
        ]);

        $devis = Devis::create($dataToStore);

        [$devisUUID, $devisPath] = $this->generateDevis($devis->toArray(), $user);

        $devis->devis_path = $devisUUID;
        $devis->save();


        dispatch(new DevisJob($devis));

        return Response::redirectTo("/devis/{$devis->id}");

        //return

//        return view("pdf.devis");
    }

    private function generateDevis($devis, $user)
    {
        $data = array_merge($devis, []);

        $data["date_fait"] = Carbon::now()->format("Y/m/d");

        $pdf = PDF::loadView('pdf.devis', $data);
        $pdf->setPaper('a4');
        $devis['societe'] = str_replace(" ", "_", $devis['societe']);
        $devis['codepostal'] = str_replace(" ", "_", $devis['codepostal']);
        $uuid = "FR1000_DEVIS_EASYLIFT_{$devis['societe']}_{$devis['codepostal']}_{$devis['id']}";
        $devisName = $uuid . ".pdf";
        $storagePath = Storage::disk('public')->path('');
        $storagePath .= "devis/" . $devisName;
        $pdf->save($storagePath);

        return ["devis/" . $devisName, $storagePath];
    }

    public function devis_interest(Devis $devis, $state)
    {
        $user = auth()->user();
        if ($devis->user_id != $user->id) {
            return abort(403);
        }
        $devis->interested = $state;
        $devis->save();
        return back()->with("success", "Votre réponse a été enregistrée");
    }
}

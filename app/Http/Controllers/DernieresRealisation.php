<?php

namespace App\Http\Controllers;

use App\Realisation;
use Illuminate\Http\Request;

class DernieresRealisation extends Controller
{

    public function index()
    {
        $data = Realisation::with("country")->orderBy('installation_date', 'desc')->get();
        return view("dernieres-realisations", [
            "data" => $data
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeSignUserMail;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Redirect;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware(["auth:web"])->only("logout");
    }

    public function index()
    {
        return view("login");
    }

    public function login(Request $request)
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended("/devis-immediat");
        }
        return back()
            ->withInput()
            ->with(["error" => "L'adresse email ou le mot de passe est incorrect"]);
    }

    public function signup(Request $request)
    {
        request()->validate([
            'name' => 'required',
            's_email' => 'required|email|unique:users,email',
            'password' => 'required',
        ], [
            "s_email.unique" => "Cet e-mail n'est pas disponible"
        ]);
        $user = User::create([
            "name" => $request->name,
            "email" => $request->s_email,
            "password" => $request->password
        ]);
        $credentials = [
            "email" => $user->email,
            "password" => $request->password
        ];
        \Mail::to($user->email)->send(new WelcomeSignUserMail($user));
        if (Auth::attempt($credentials)) {
            return redirect()->intended(url("/devis-immediat"));
        }



        return \Response::redirectTo("/devis-immediat");
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->intended("/");
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function generateToken() {
        //generiamo una stringa randomica di 80 caratteri
        $api_token = Str::random(80);

        //assegniamo all'utente corrente l'api token generato
        $user = Auth::user();
        $user->api_token = $api_token;
        $user->save();

        return redirect()->route('admin.profile');
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index(Request $request){
        return view('pages.auth.profil.index');
    }//
}

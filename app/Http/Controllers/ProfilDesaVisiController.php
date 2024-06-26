<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilDesaVisiController extends Controller
{
    public function index()
    {
        return view('backoffice.profildesa_visi.index');
        
    }
}

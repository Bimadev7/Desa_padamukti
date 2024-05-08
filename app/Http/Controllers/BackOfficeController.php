<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function index()
    {
        return view('backoffice.main');
    }

    public function index2()
    {
        return view('backoffice.main2');
    }

    public function show(Barang $barang)
{
    return view('backoffice.main', compact('barang'));
}
}

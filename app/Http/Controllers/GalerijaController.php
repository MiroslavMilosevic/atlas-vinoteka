<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalerijaController extends Controller
{

    public function index()
    {
        return view('galerija.index');
    }

}

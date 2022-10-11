<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Methods in this controller are not following laravel naming conventions
| This controller only exists for purposes of code readability
|--------------------------------------------------------------------------
*/
class StaticController extends Controller
{

    public function kontakt()
    {
        return view('kontakt');
    }

    public function onama()
    {
        return view('onama');
    }

    public function pocetna()
    {
        return view('pocetna');
    }

    public function welcome()
    {
        return view('welcome');
    }

}

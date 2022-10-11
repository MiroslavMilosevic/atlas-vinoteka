<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function main()
    {
        return view('admin.main');
    }

    //Products view functions 
    public function adminShowProducts()
    {
        return view('admin.products');
    }
    //Products view functions 

    //Blogs view functions 
    public function adminShowBlogs()
    {
        return view('admin.blogs');
    }
    //Blogs view functions 

    //Galerija view functions 
    public function adminShowGalerija()
    {
        return view('admin.galerija');
    }
    //Galerija view functions 
}

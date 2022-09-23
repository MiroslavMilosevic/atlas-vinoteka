<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::all();

        return view('blog.index', ['blogs'=>$blogs]);
    }

    public function show($id)
    {
        $one_blog = Blog::findOrFail($id);
        return view('blog.show', ['one_blog' => $one_blog]);
        

    }
}

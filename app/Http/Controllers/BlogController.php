<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $limit = request('limit');
        if( !is_numeric($limit) || $limit < 1){
            $limit = 8;
        }

        $blogs = 
        Blog::
          take($limit)
        ->orderBy('should_end_at', 'desc')
        ->paginate(30);

        return view('blog.index', ['blogs'=>$blogs]);
    }

    public function show($id)
    {
        $one_blog = Blog::findOrFail($id);
        return view('blog.show', ['one_blog' => $one_blog]);
        

    }
}

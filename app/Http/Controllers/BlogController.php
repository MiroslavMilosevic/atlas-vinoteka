<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $is_limit_set = true;
        $limit = request('limit');
        if( !is_numeric($limit) || $limit < 1){
            $limit = 8;
            $is_limit_set = false;
        }

        $blogs = 
        Blog::
          take($limit)
        ->orderBy('should_end_at', 'desc')
        ->paginate($limit);

        return view('blog.index', ['blogs'=>$blogs, 'pagination'=>$limit, 'isLimitSet'=>$is_limit_set]);
    }

    public function show($id)
    {
        $one_blog = Blog::findOrFail($id);
        return view('blog.show', ['one_blog' => $one_blog]);
        

    }
}

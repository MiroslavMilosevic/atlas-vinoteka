<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        $products =
            Product::orderBy('title', 'desc')
            ->paginate('10');

        return view('product.index', ['products' => $products]);
    }

    public function show($id)
    {
        return view('product.show', ['id' => $id]);
    }
}

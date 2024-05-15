<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $products->load('category');
        return response()->json([
            'status' => 'succes',
            'data' => $products,
        ], 200);
    }
}

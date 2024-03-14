<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getIndex(Request $request){
        $products = Product::filter($request->all())->simplePaginate(28);
    }
}

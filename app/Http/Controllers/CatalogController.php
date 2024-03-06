<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\MySqlConnection;

class CatalogController extends Controller
{
    public function getIndex(){
        $catalogs = Catalog::all();
        return view('catalogs', compact('catalogs'));
    }

    public function getOne(Catalog $catalog){
        $prod = DB::table('products')->where('catalog_id', '=', $catalog->id)->get();
        $category = Catalog::where('parent_id', '=', $catalog->id)->get();
        // $prod = $catalog->with('products')->first();
        // dd($category);
        return view('catalog', compact('prod', 'catalog', 'category'));
    }

    public function example(){
        return view('example');
    }
}

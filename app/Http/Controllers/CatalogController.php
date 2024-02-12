<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;

class CatalogController extends Controller
{
    public function getIndex(){
        $catalogs = Catalog::whereNull('parent_id')->get();
        return view('catalog', compact('catalogs'));
    }
}

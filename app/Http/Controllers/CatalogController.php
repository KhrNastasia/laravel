<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\MySqlConnection;

class CatalogController extends Controller
{
    public function getIndex(){
        $catalogs = DB::table('catalogs')->get();
        // dd($all);
        return view('catalog', [
            'catalogs' => $catalogs,
        ]);
    }
}

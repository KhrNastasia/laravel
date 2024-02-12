<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintext;
use App;

class MaintextController extends Controller
{
    public function getUrl($url = null){
        $maintext = Maintext::where('url', $url)->where('lang', App::getLocale())->first();
        return view('maintext', compact('maintext'));
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Review;
use App\Actions\Imag;
use App;
use Auth;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function getIndex(){
        return view('photo');
    }

    public function getData(Review $review){
        dd($review);
        return view('review');
    }

    public function postData(Request $request){
        $review = new Review;
        $review->comment = $request->comment;
        if ($request->hasFile('add_photo_file')) {
            $pic = App::make(Imag::class)->url($request->file('add_photo_file'));
            $review->picture = $pic;
        }
        $review->user_id = Auth::user()->id;
        $review->save();
        return redirect()->back();
    }
}

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
        // $reviews = Review::all();
        $reviews = Review::orderBy('id', 'DESC')->paginate(3);
        return view('photo', compact('reviews'));
    }

    public function getData(Review $reviews){
        // $reviews = Review::all(); 
        // dd($reviews);
        $reviews = Review::orderBy('id', 'DESC')->simplePaginate(3);
        return view('photo', compact('reviews'));
    }

    public function postData(Request $request){
        $review = new Review;
        $review->comment = $request->comment;
        if ($request->hasFile('add_photo_file')) {
            $pic = App::make(Imag::class)->url($request->file('add_photo_file'));
            $review->picture = $pic;
        }
        $review->user_id = Auth::guest() ? 0 : Auth::user()->id;
        $review->save();
        return redirect()->back();
    }
}

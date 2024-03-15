<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\MaintextResource;
use App\Models\Maintext;

class MaintextController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MaintextResource::collection(Maintext::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $text = Maintext::create($request->all());
        return new MaintextResource($text);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new MaintextResource(Maintext::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $text = Maintext::find($id);
        $text->update($request->all());
        return new MaintextResource($text); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $text = Maintext::find($id);
        if($text){
            $text->delete();
            $msg = 'Deleted';
        }else{
            $msg = 'Not found';
        } 
        return response()->json(['msg'=>$msg]);
    }
}

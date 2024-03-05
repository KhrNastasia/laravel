<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\CatalogResource;
use App\Models\Catalog;

class CatalogapiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CatalogResource::collection(Catalog::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $catalog = Catalog::create($request->all());
        return new CatalogResource($catalog);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new CatalogResource(Catalog::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $catalog = Catalog::find($id);
        $catalog->update($request->all());
        return new CatalogResource($catalog);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $catalog = Catalog::find($id);
        if($catalog){
            $catalog->delete();
            $msg = 'Deleted';
        } else{
            $msg = "Not founded";
        }
        return response()->json(["msg" => $msg]);
    }
}

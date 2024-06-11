<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEstateRequest;
use App\Http\Resources\EstateResource;
use App\Models\Estate;
use Illuminate\Http\Request;

class EstateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return Estate::all();
        // return Estate::with('category')->get();
        // return new EstateResource(Estate::with('category')->get());
        // return new EstateResource(Estate::all());
        return EstateResource::collection (Estate::all());

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEstateRequest $request)
    {
        $estate = Estate::create($request->all());
        return new EstateResource($estate);
    }

    /**
     * Display the specified resource.
     */
    public function show(Estate $estate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estate $estate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estate $estate)
    {
        $estate->delete();
        return response()->noContent();
    }
}

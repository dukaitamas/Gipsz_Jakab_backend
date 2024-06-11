<?php

namespace App\Http\Controllers;

use App\Http\Resources\EstateResource;
use App\Models\Category;
use App\Models\Estate;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function estatesOfCategory(Category $category)
    {
        // return $category->estates;
        return EstateResource::collection($category->estates);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}

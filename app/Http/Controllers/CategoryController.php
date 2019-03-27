<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        return response()->json(Category::all()->toArray());
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        return response()->json(['status' => true, 'message' => 'Category Created']);
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        //
    }

    public function update(Request $request, Category $category)
    {
        //
    }

    public function destroy(Category $category)
    {
        return response()->json(['status' => true, 'message' => 'Category Deleted']);
    }
}

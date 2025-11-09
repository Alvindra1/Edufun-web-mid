<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        return view('category', compact('categories'));
    }

    public function show($id)
    {
        $category = Category::with(['articles.writer'])->findOrFail($id);
        return view('category-detail', compact('category'));
    }
}

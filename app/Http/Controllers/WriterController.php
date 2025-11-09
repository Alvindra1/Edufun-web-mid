<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writer;

class WriterController extends Controller
{
    //
     public function index()
    {
        $writers = Writer::all();
        return view('writers', compact('writers'));
    }

    public function show($id)
    {
        $writer = Writer::with('articles.category')->findOrFail($id);
        return view('writer-detail', compact('writer'));
    }
}

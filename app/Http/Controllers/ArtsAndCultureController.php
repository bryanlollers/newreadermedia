<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtsAndCultureController extends Controller
{
    public function index()
    {
        return view('blogs.arts-and-culture.index');
    }

    // Aphantasia
    public function blog1()
    {
        return view('blogs.arts-and-culture.aphantasia');
    }
}

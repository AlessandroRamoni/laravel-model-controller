<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class PageController extends Controller
{
    public function index(/*Request $request*/)
    {
        //$input = $request->all();
        //var_dump($input);
        $movies = Movie::all();
        return view('home', compact('movies'));
    }
}

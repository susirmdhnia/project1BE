<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show(){
        $movies = Movie::all();
        return view('welcome', compact('movies'));
    }

    public function create(){
        return view('createMovie');
    }

    public function store(Request $request){
        Movie::create([
            'title' => $request->title, 
            'realeseDate' => $request->realeseDate, 
            'genre' => $request->genre, 
            'director' => $request->director, 
            'actor' => $request->actor
        ]);

        return redirect(route('show'));
    }
}

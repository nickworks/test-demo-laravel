<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /** Returns all movies */
    public function index(){
        $movies = Movie::all();
        
        return response([
            'movies' => $movies,
        ], 200);
    }
    /** Creates a new movie */
    public function store(Request $request){
        $values = $request->validate([
            'name' => 'required|string|min:1|max:64',
            'description' => 'nullable|string',
            'year' => 'required|int|min:1900|max:2022',
        ]);
        $movie = Movie::create($values);

        return response([
            'movie' => $movie,
        ], 202);
    }
    /** Deletes a movie */
    public function delete($id){
        $movie = Movie::find($id);
        if(!$movie) return response(['movie not found!'], 404);

        $movie->delete();
        return response([], 204);
    }
}

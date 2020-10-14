<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(Request $req)
    {
        $movie = $req->timkiem;
        if ($movie === null) {
            $movies = Movie::all()->sortByDesc('id');
            return view('index', ['movies' => $movies]);
        } else {
            $movies = Movie::where('tenphim', 'LIKE', '%' . $movie . '%')->get();
            return view('index', ['movies' => $movies]);
        }
    }

    public function show($id)
    {
        $movie = Movie::find($id);
        return view('show', ['movie' => $movie]);
    }

    public function showTheLoai($theloai)
    {
        $movies = Movie::where('theloai', $theloai)->orderBy('id', 'DESC')->get();
        return view('index', ['movies' => $movies]);
    }
}

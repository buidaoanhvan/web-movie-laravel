<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $movies = Movie::all();
        return view('admin', ['movies' => $movies]);
    }

    public function addphim(Request $req)
    {
        Movie::insert([
            'tenphim' => $req->tenphim,
            'hinhanh' => $req->linkhinh,
            'theloai' => $req->theloai,
            'ngaysanxuat' => $req->ngaysanxuat,
            'danhgia' => $req->danhgia,
            'dienvien' => $req->dienvien,
            'mota' => $req->mota,
            'link' => $req->linkphim,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect('/admin');
    }
}

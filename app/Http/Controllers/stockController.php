<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class stockController extends Controller
{

    public function homeGet(Request $request)
    {
        return view('home', );
    }

    public function homePost(Request $request)
    {
        return view('home', compact());
    }

    public function registerGet(Request $request)
    {
        return view('data_register', );
    }

    public function registerPost(Request $request)
    {
        return view('data_register', compact());
    }

    public function deleteGet(Request $request)
    {
        return view('delete', compact());
    }

    public function deletePost(Request $request)
    {
        return view('delete', compact());
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class stockController extends Controller
{

    public function homeGet(Request $request)
    {
        $user = Auth::user();
        return view('homepage', compact('user'));
    }

    public function homePost(Request $request)
    {
        return view('homepage', compact());
    }

    public function registerGet(Request $request)
    {
        $user = Auth::user();
        return view('data_register', compact('user'));
    }

    public function registerPost(Request $request)
    {
        return view('data_register', compact());
    }

    public function deleteGet(Request $request)
    {
        $user = Auth::user();
        return view('update_delete',  compact('user'));
    }

    public function deletePost(Request $request)
    {
        return view('update_delete', compact());
    }


}

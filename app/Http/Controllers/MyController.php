<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function home() {
        return view('home');
    }
    public function profile() {
        return view('profile');
    }
}

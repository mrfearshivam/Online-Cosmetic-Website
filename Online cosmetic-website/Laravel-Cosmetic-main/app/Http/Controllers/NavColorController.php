<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavColorController extends Controller
{
    public function showNavbar()
    {
        $scrollClass = 'nav-color';
        return view('navbar', ['scrollClass' => $scrollClass]);
    }
}

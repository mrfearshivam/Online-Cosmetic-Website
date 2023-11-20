<?php

// Create a controller in Laravel to handle the logic

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller

{
    public function openMenu()
    {
        // Your code to open the menu
        return view('faqs.blade .php');
    }

    public function closeMenu()
    {
        // Your code to close the menu
        return view('faqs.view.name');
    }

}


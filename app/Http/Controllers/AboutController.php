<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $name='John Doe';


        return view('about', compact('name'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $name='John Doe';


        return view('contact', compact('name'));
    }
}

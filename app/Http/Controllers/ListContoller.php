<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListContoller extends Controller
{
    public function index()
    {
        return view('listing'); 
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnersController extends Controller
{
    public function index() 
    { 
        return view('owners');
    }
}

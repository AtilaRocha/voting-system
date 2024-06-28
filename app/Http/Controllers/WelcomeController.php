<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;

class WelcomeController extends Controller
{
    public function index()
    {
        $options = Option::all();
        return view('welcome', compact('options'));
    }
}

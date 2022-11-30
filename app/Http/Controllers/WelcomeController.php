<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function Welcome($name) {
        return view('welcome', ['name' => $name]);
    }
}

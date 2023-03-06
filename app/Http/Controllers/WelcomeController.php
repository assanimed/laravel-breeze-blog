<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index($name)
    {
        return view('welcome', [
            'name' => $name,
        ]);
    }

    public function addTest(Request $request)
    {
        ddd($request);
    }
}

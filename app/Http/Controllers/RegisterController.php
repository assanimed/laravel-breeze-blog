<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(Request $req)
    {
        $attrs = $req->validate([
            'name' => ['required', 'max:255'],
            'username' => [
                'unique:users,username',
                'required',
                'min:2',
                'max:20',
            ],
            'email' => ['unique:users,email', 'required', 'email'],
            'password' => ['required', 'confirmed', 'min:8', 'max:255'],
        ]);

        $user = User::create($attrs);

        Auth::login($user);

        return redirect('/')->with(
            'success',
            'Successfully Created Your Account'
        );
    }
}
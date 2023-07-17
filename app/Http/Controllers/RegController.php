<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;

class RegController extends Controller
{
    public function show() {
        return view ('auth.register');
    }

    public function register(RegisterRequest $request) {
        $request->validate([
            
            'email' => 'required|email|unique:users',
            'username' => 'required',
            'password' => 'required|min:5|confirmed',
            
        ]);

        $user = User::create([
            
            'email' =>$request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        auth()->login($user);
        return redirect('/home')->with('success', "Account created successfully.");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'status' => 'required|numeric|min:0',
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create the user with a hashed password
        $user = User::create([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')), // Hash the password
            'status' => $request->input('status'),
        ]);

        // Optionally, log the user in after registration
        Auth::login($user);

        // Redirect or return a response
        return redirect()->route('signin')->with('success', 'Registration successful!');
    }

    public function login(Request $request)
    {
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];
        // dd($credentials);

        if (Auth::attempt($credentials)) {
            return redirect('/')->with('success', 'You are logged in!');
        }

        return redirect()->route('signin')->withErrors(['email' => 'Type Correct User Email & Password']);
    }
}

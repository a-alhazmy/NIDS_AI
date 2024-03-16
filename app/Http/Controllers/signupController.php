<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;


class SignupController extends Controller
{
    /**
     * Show the signup form.
     *
     * @return \Illuminate\View\View
     */
    public function showSignupForm()
    {
        return view('auth.signup');
    }

    /**
     * Handle the signup form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function signup(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Create a new user record
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Log the user in
        auth()->login($user);

        // Redirect the user to a different page after signup
        return redirect()->route('dashboard');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    /**
     * Handle the login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Validate the login request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Retrieve the email and password from the request
        // $credentials = $request->only('email', 'password');

        // Attempt to log in the user
        // if (Auth::attempt($credentials)) {
        //     // Authentication passed
        //     return redirect()->route('dashboard');
        // }

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed

            // Redirect to the intended URL after successful login
            return redirect()->intended('dashboard')
                ->withSuccess('You have successfully logged in');
        }

        // Authentication failed
        return redirect()->route('login')->with('error', 'Invalid username or password');
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
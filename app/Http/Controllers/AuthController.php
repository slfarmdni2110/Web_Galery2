<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    // Method to show the login form
    public function showFormLogin()
    {
        return view('auth.login');
    }

    // Method to handle the login process
    public function login(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Attempt to find the petugas by email
        $petugas = DB::table('petugas')->where('email', $validatedData['email'])->first();

        // Check if the petugas exists and password is correct
        if ($petugas && Hash::check($validatedData['password'], $petugas->password)) {
            // Log in the petugas
            Auth::loginUsingId($petugas->id);
            $request->session()->regenerate();  // Regenerate session ID for security

            // Redirect to intended page or default to /admin
            return redirect()->intended('/admin');
        }

        // Return to login page with error message if authentication fails
        return back()->withErrors(['email' => 'Email or Password is incorrect']);
    }

    // Method for logging out the user
    public function logout(Request $request)
    {
        // Log out the petugas
        Auth::logout();

        // Invalidate and regenerate session token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect to login page
        return redirect('/login');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    // Method to handle the login process
    public function login(Request $request): JsonResponse
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

            // Generate a response with the success message and user data
            return response()->json([
                'message' => 'Login successful',
                'user' => $petugas
            ], 200);
        }

        // Return error response if authentication fails
        return response()->json([
            'message' => 'Email or Password is incorrect'
        ], 401);
    }

    // Method for logging out the user
    public function logout(Request $request): JsonResponse
    {
        // Log out the petugas
        Auth::logout();

        // Invalidate and regenerate session token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Return success response
        return response()->json([
            'message' => 'Logout successful'
        ], 200);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display the login page.
     */
    public function showLoginForm()
    {
        return view('pages.auth.login');
    }

    /**
     * Handle a login request.
     *
     * NOTE: This method is prepared for you to implement your custom authentication logic.
     * You will need to complete the authentication logic based on your specific requirements.
     */
    public function login(Request $request)
    {
        // Validate the request
        $credentials = $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
            'sat' => 'required|in:sat1,sat2',
        ]);

        // TODO: Implement your custom authentication logic here
        // Example:
        // 1. Verify credentials against your database or external service
        // 2. Check which SAT the user belongs to
        // 3. Authenticate the user
        // 4. Redirect to appropriate dashboard

        // For now, just redirect back with the validated data
        // You should replace this with your actual authentication logic
        
        return redirect()->back()
            ->with('error', 'La logique d\'authentification doit être implémentée.');
    }

    /**
     * Log the user out.
     */
    public function logout(Request $request)
    {
        // TODO: Implement your logout logic
        
        return redirect()->route('home');
    }
}

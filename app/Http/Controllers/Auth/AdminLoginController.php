<?php

// app/Http/Controllers/Auth/AdminLoginController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminLoginController extends Controller
{
    // Show the admin login form
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    // Handle login logic
    public function login(Request $request)
    {
        // Validate the user inputs
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Check if the admin exists
        $admin = Admin::where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            // If password is correct, update the login time
            $admin->login_time = now();
            $admin->save();

            // Log the admin in
            Auth::login($admin);

            // Redirect to the dashboard
            return redirect()->route('admin.dashboard');
        }

        // Return error if credentials are invalid
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    // Handle logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}


<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();
            $hasAssignedRole = in_array($user->role, ['admin', 'teacher', 'student'], true);
            $isApproved = !empty($user->email_verified_at);

            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            }

            if ($isApproved && $hasAssignedRole) {
                return redirect()->route('home');
            }

            return redirect()->route('user.pending');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('home');
    }

    public function register(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        dd($validated);

        User::create($validated);

        return redirect()->route('students.index')
            ->with('message', 'Created User Successfully');
    }
}

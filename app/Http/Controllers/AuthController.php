<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {}
    public function authenticate() {}
    public function logout() {}
    public function register(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        $user = User::create($validated);

        return response()->json([
            'message' => "User was created!",
            'data' => [
                'name' => $user->name,
                'email' => $user->email
            ]
        ], 201);
    }
}

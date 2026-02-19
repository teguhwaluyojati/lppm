<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthTokenController extends Controller
{
    /**
     * Issue a Sanctum token for testing.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
            'token_name' => ['nullable', 'string', 'max:255'],
        ]);

        $user = User::where('email', $validated['email'])->first();

        if (!$user || !Hash::check($validated['password'], $user->password)) {
            return response()->json([
                'message' => 'Invalid credentials.',
            ], 401);
        }

        $tokenName = $validated['token_name'] ?? 'api-test';
        $token = $user->createToken($tokenName)->plainTextToken;

        return response()->json([
            'message' => 'Token issued successfully.',
            'token' => $token,
            'token_type' => 'Bearer',
        ]);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $token = $request->user()->createToken('backend-test');

        return response()->json([
            'message' => 'Login successful',
            'token' => $token->plainTextToken,
        ]);
    }
}

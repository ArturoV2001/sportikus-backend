<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(UserRequest $request)
    {
        $user = User::create([
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'name' => $request['name'],
            'last_name' => $request['last_name'],
            'weight' => $request['weight'],
            'birthdate' => $request['birthdate'],
        ]);

        $accessToken = $user->createToken('authToken')->accessToken;

        return response()->json(['user' => $user, 'access_token' => $accessToken], 201);
    }

    public function login(Request $request)
    {
        $login = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ]);

        if (! auth()->attempt($login)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
        $user = auth()->user();
        $accessToken = $user->createToken('authToken')->accessToken;

        return response()->json(['user' => $user, 'access_token' => $accessToken], 201);
    }
}

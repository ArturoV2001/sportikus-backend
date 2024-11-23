<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\Token;

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

    public function logout(Request $request)
    {
        if (Auth::guard('api')->check()) {
            $request->user()->token()->revoke();

            return response()->json(['message' => 'Successfully logged out'], 200);
        }

        return response()->json(['message' => 'Unauthorized'], 401);
    }

    public function checkSession(Request $request)
    {
        // Obtener el token desde el encabezado
        $token = $request->bearerToken();

        // Verificar si el token es válido
        if (! $token || ! Auth::guard('api')->check()) {
            return response()->json([
                'message' => 'No active session or invalid token',
            ], 401);
        }

        // Obtener el usuario autenticado
        $user = Auth::guard('api')->user();

        return response()->json([
            'message' => 'User session is active',
            'user' => $user,
            'authenticated' => true,
        ], 200);
    }
}

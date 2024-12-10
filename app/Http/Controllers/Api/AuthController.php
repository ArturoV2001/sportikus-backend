<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User\User;
use App\Rules\ClientSecretValid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $register = $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'weight' => 'nullable|numeric|between:0,999.99',
            'birthdate' => 'required|date',
            'gender_id' => 'required|numeric|between:1,2',
            'grant_type' => 'required',
            'client_id' => 'required',
            'client_secret' => ['required', new ClientSecretValid($request['client_id'], $request['grant_type'])],
        ]);
        $user = User::create([
            'email' => $register['email'],
            'password' => Hash::make($register['password']),
            'name' => $register['name'],
            'last_name' => $register['last_name'],
            'weight' => $register['weight'],
            'birthdate' => $register['birthdate'],
            'gender_id' => $register['gender_id'],
        ]);

        $accessToken = $user->createToken('authToken')->accessToken;

        return response()->json(['user' => $user, 'access_token' => $accessToken], 201);
    }

    public function login(Request $request)
    {
        $login = $request->validate([
            'grant_type' => 'required',
            'client_id' => 'required',
            'client_secret' => ['required', new ClientSecretValid($request['client_id'], $request['grant_type'])],
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ]);
        if (! Auth::guard('web')->attempt([
            'email' => $login['email'],
            'password' => $login['password'],
        ])) {
            return response()->json(['message' => 'Por favor, verifica tus credenciales'], 401);
        }
        $user = Auth::guard('web')->user();
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
        $token = $request->bearerToken();
        if (! $token || ! Auth::guard('api')->check()) {
            return response()->json([
                'message' => 'No active session or invalid token',
            ], 401);
        }
        $user = Auth::guard('api')->user();

        return response()->json([
            'message' => 'User session is active',
            'user' => $user,
            'authenticated' => true,
        ], 200);
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);
        $user = Auth::guard('api')->user();
        if (! Hash::check($request->current_password, $user->password)) {
            return response()->json([
                'message' => 'La contraseña actual no es correcta.',
            ], 400);
        }
        $user->password = Hash::make($request->new_password);
        $user->save();

        return response()->json([
            'message' => 'La contraseña se ha cambiado correctamente.',
        ], 200);
    }
}

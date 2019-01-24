<?php

namespace App\Http\Controllers\Api\Auth;

// use JWTAuth;
// use App\User;
// use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Hash;
// use Tymon\JWTAuth\Exceptions\JWTException;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function login()
    {
        $credentials = request(['username', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function me()
    {
        return response()->json(auth()->user());
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

    //
    //
    // public function signin(Request $request)
    // {
    //     $this->validate($request, [
    //         'username' => 'required',
    //         'password' => 'required'
    //     ]);
    //
    //     $credentials = $request->only('username', 'password');
    //
    //     try {
    //         // attempt to verify the credentials and create a token for the user
    //         if (! $token = JWTAuth::attempt($credentials)) {
    //             return response()->json(['error' => 'invalid_credentials'], 401);
    //         }
    //     } catch (JWTException $e) {
    //         // something went wrong whilst attempting to encode the token
    //         return response()->json(['error' => 'could_not_create_token'], 500);
    //     }
    //
    //     // all good so return the token
    //     return response()->json([
    //         'user_id' => $request->user()->id,
    //         'token' => $token
    //         ]);
    // }

}

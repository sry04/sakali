<?php

namespace App\Http\Controllers\Api\Auth;

use JWTAuth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{

    public function signup(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|unique:users',
            'email'    => 'required|unique:users',
            'password' => 'required'
        ]);

        return User::create([
            'username' => $request->json('username'),
            'email'    => $request->json('email'),
            'password' => bcrypt($request->json('password')),

        ]); 
    }

    public function signin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('username', 'password');

        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // all good so return the token
        return response()->json([
            'user_id' => $request->user()->id,
            'token' => $token
            ]);
    }





//   public function __construct()
//   {

//   }

//   public function login(Request $request)
//   {
//       $response = [];
//       $response['status'] = false;
//       $response['message'] = "";
//       $response['data'] = [];

//       $this->validate($request, [
//         'email' => 'required',
//         'password' => 'required'
//       ]);

//       $checkData = User::where('email', $request->email)->first();

//       if ($checkData) {
//           $checkPassword = Hash::check($request->password, $checkData->password);
//           if ($checkPassword) {
//               $checkData->save();
//               $response['message'] = "Login Succesfully";
//               $response['data'] = $checkData;
//               $response['status'] = true;
//           } else {
//               $response['message'] = "Password is incorect";
//           }
//         } else {
//             $response['message'] = "Email or Password is incorect";
//         }

//       return response()->json($response);
//   }

//   public function register(Request $request)
//   {
//       $response = [];
//       $response['status'] = false;
//       $response['message'] = "";
//       $response['data'] = [];

//       $this->validate($request, [
//         'email' => 'required|unique:users,email',
//         'password' => 'required',
//         'name' => 'required'
//       ]);

//       $dataRegister = new User();
//       $dataRegister->email = strtolower($request->email);
//       $dataRegister->password = app('hash')->make($request->password);
//       $dataRegister->name = $request->name;
//       $dataRegister->token = app('hash')->make(uniqid());
//       $dataRegister->save();
//       $response['status'] = true;
//       $response['message'] = "Register success";
//       $response['data'] = $dataRegister;

//       return response()->json($response);
//   }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth; 
class AuthManager extends Controller
{
    function loginPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed, generate token
            $user = Auth::user();
            $token = $user->createToken('authToken')->accessToken;

            return response()->json("success");
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    function registerPost(Request $request)
    {
        $validator = Validator::make($request -> all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
        echo $request ;
        if($validator->fails()){
            return response()->json(['error'=>$validator->messages()], 400);
        }
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json(['access_token'=>$token,'token_type'=>'Bearer',]);
    }

    function logout(Request $request)
    {
        echo($request->user());
        // if ()
        //     $request->user()->token()->revoke();
        // $cookie = Cookie::forget("my_app_session");
        // return response()->json([
        //     'message' => 'Successfully logged out'
        // ])->withCookie($cookie);
       
    }
    
}

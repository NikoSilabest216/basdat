<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt.verify',['except'=>['login','register']]);
    }
    public function login()
    {
        $credentials=request(['email','password']);
        if(!$token=auth('api')->attempt($credentials)){
            return response()->json(['error'=>'Unauthorized'],401);
        }
        return $this->respondWithToken($token);
    }
    public function me()
    {
        return response()->json(auth('api')->user());
    }
    public function logout()
    {
        auth('api')->logout();

        return response()->json(['message'=>'HASTA LA VISTA BABY!']);
    }
    public function refresh()
    {
        return $this->respondWithToken(auth('api')->refresh());
    }
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token'=>$token,
            'token_type'=>'bearer',
            'expires_in'=>auth('api')->factory()->getTTL()*60
        ]);
    }
    public function register(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'name'=>'required|string|max:255',
            'email'=>'required|string|email|max:255|unique:users',
            'password'=>'required|string|min:6|confirmed',
        ]);
        if($validator->fails()){
            return response()->json([
                'status'=>'error',
                'success'=>false,
                'error'=>$validator->errors()->toArray(),
            ],400);
        }
        $user =User::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password'))
        ]);
        return response()->json([
            'message'=>'Udah terbuat',
            'user'=>$user
        ]);
    }


    public function guard()
    {
        return Auth::guard('api');
    }
}

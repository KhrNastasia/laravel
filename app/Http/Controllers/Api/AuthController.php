<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\password;

class AuthController extends Controller
{
    public function register(UserRequest $r){
        $r['password'] = Hash::make($r->password);
        $user = User::create($r->all());
        $token = $user->createToken('myAppToken')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token,
        ];
        return response($response);
    }

    public function home(){
        return response(Auth::user());
    }

    public function login(Request $request){
        abort_if(!$request->email, 403, 'No email');
        abort_if(!$request->password, 403, 'No correct password');
        $user = User::where('email', $request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)){
            return response(['msg'=>'bad credits']);
        }
        $token = $user->createToken('myAppToken')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token,
        ];
        return response($response);
    }

    public function logout(){
        optional(Auth::user())->tokens()->delete();
        return response(['msg'=>'Log out']);
    }
}

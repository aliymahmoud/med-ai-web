<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $email = $request->email;
        $password = $request->password;

        if(Auth::attempt(['email' => $email, 'password' => $password])){
            $user = Auth::user();
            $user->api_token = str_random(60);
            $user->save();
            $user_roles = [];
            foreach($user->roles as $index=>$role){
                $user_roles[$index] = $role->id;
            }

            return response()->json([
                'status_code' => '200',
                'api_token' => $user->api_token,
                'user_roles' => $user_roles,
            ],200);
        }

        else{
            return response()->json([
                'status_code' => '401',
                'message' => 'Wrong Credintals',
            ],401);
        }
        
    }

    public function logout()
    {
        if(Auth::user()->api_token){
            $user = Auth::user();
            $user->api_token = null;
            $user->save();
            return response()->json([
                'status_code' => '200',
                'message' => "Logged out successfuly",
            ],200);
        }
        else{
            return response()->json([
                "message" => "No user logged in",
            ]);
        }
    }
}

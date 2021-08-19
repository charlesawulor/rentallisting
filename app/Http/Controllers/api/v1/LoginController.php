<?php

namespace App\Http\Controllers\api\v1;

use App\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{



    public function register(Request $request)
    {
     
       $validatedData = $request->validate([
       'name'=> 'required|max:55',
       'email'=> 'email|required',
       'password'=> 'required|confirmed' 
      
       ]);
    
      $user = User::create($validatedData);
    
      $accessToken = $user->createToken('authToken')->accessToken;
    
      return response(['user'=>$user, 'access_token'=>$accessToken]);
    
    }


    public function login ( Request $request) {
        $login = $request->validate ([
            'email' => 'required|string',
            'password' => 'required|string'
           
           ]);
           
           if ( !Auth::attempt ($login)) {
           return response (['message' => 'invalid login credentials']);
           
           }
           
           $accessToken = Auth::user()->createToken('authToken') ->accessToken;
           
           return response(['user' => Auth::user(), 'access_token'=> $accessToken]);

    }
}

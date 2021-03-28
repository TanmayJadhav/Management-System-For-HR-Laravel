<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
        if(Auth::attempt(['email'=>$request->input('email'),'password'=>($request->input('password'))]))
        {
            return view('dashboard');
        }
        else{
            
            $error = 'Login Failed.Please check the Credentials!!';
            return view("login",compact('error'));
        }
        
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
}

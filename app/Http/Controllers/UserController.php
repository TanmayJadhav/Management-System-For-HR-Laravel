<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function login(Request $request)
    {
        User::create(['name'=>$request->input('name'),'email'=>$request->input('email'),'password'=>Hash::make($request->input('password'))]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function registerPost(RegisterRequest $request){
        $register = new User();
        $register->name = $request->name;
        $register->email = $request->email;
        $register->password = Hash::make($request->password);
        $register->save();
        return back()->with('success', 'inscrit réussie');
    }
}

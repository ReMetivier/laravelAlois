<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function updateUser(User $user){
        return view('updateUser', ["users" => $user]);
    }

    public function updateUserPost(Request $request, User $user){
        $user->name = $request->name;
        $user->role = $request->role;
        $user->save();

        return redirect('users')->with('success','l\'utilisateur a été actualisée');
    }
}

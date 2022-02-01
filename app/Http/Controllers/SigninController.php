<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SigninController extends Controller
{
    function submit_login(Request $request) {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $userCheck = User::where(['email'=>$request->email, 'password'=>$request->password])->count();
        if ($userCheck > 0) {
            $adminData = User::where(['email'=>$request->username, 'password'=>$request->password])->first();
            session();
            return redirect('/');
        }
        else {
            return redirect('/signin')->with('Error','Incorrect Details');
        }

    }
}

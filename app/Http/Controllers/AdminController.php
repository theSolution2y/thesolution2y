<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;

class AdminController extends Controller
{
    //login view
    function login() {
        return view('backend.login');
    }

    // submit login
    function submit_login(Request $request) {
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        $userCheck = Admin::where(['username'=>$request->username, 'password'=>$request->password])->count();
        if ($userCheck > 0) {
            $adminData = Admin::where(['username'=>$request->username, 'password'=>$request->password])->first();
            session(['adminData'=>$adminData]);
            return redirect('admin/dashboard');
        }
        else {
            return redirect('admin/login')->with('error','maybe you are knocking the wrong door');
        }

    }

    // dashboard
    function dashboard() {
        return view('backend.dashboard');
    }


    // logout 

    function logout() {
        session()->forget(['adminData']);
        return redirect('admin/logout');
    }
}

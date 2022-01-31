<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SignupController extends Controller
{
    public function send(Request $nerd){
        $user=new user;
        $user->name=$nerd->name;
        $user->email=$nerd->email;
        $user->password=$nerd->password;
        $user->save();
        return back()->with('Success');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    function send(Request $req){
        $contact=new contact;
        $contact->name=$req->name;
        $contact->email=$req->email;
        $contact->message=$req->message;
        $contact->save();
        return back()->with('Success');
    }
}

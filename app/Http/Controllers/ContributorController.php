<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contributor;

class ContributorController extends Controller
{
    function store(Request $req){
        $contributor=new contributor;
        $contributor->name=$req->name;
        $contributor->email=$req->email;
        $contributor->url=$req->url;
        $contributor->save();
        return back()->with('Success');
    }
}

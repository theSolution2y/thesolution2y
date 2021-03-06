<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contributor;

class ContributorController extends Controller
{
    public function store(Request $request){
        // $request->validate([
        //     'name'=>'required',
        //     'email'=>'required',
        //     'githubUrl'=>'required'
        // ]);

        $contributor = new Contributor;

        $contributor->name = $request->name;
        $contributor->email = $request->email;
        $contributor->githubUrl = $request->github;

        $contributor->save();

        return redirect('/contactus') -> with('success', 'Form has been submitted');
    }
}

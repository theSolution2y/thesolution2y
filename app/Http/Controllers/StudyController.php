<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category; // because we want to store posts with category
use App\Models\Post;
use Carbon\Carbon;

class StudyController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function study()
    {
        $cats = Category::all();
        return view('study', ['cats'=>$cats]);
        // $cats = Category::all();
        // $data = Post::all();
        // return view('study',['data'=>$data,'cats'=>$cats]);
    }

    public function read($id)
    {
        // dd($id);
        $posts = Post::where('cat_id',$id)->get();
        // dd($posts);
        return view('read',['posts'=>$posts]);
    }
}

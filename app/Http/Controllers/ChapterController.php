<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category; // because we want to store posts with category
use App\Models\Post;
use Carbon\Carbon;  
use Illuminate\Support\Facades\Storage;
class ChapterController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function read($id)
    {
        // dd($id);
        // $contents = Storage::get('file.jpg');
        $posts = Post::where('id',$id)->get();
        // // dd($posts);
        return view('chapter',['posts'=>$posts]);

        // $storagePath = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix();

        // return view('admin.document', compact('document', 'storagePath'));
    }
}

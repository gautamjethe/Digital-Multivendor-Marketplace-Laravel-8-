<?php

namespace App\Http\Controllers;

use App\Models\blogcomments;
use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function addblog(Request $request)
    {
        request()->all();
        
        $com = new Blogs;
        $file = $request->file('file');
        $filename = time().'.'.$file->getClientOriginalExtension();
        $path = public_path().'/uploads/';
        $file->move($path, $filename);

        $com->title = $request->input('title');
        $com->image = $filename;
        $com->content = $request->input('content');
        $com->uid = Auth::user()->id;
        $com->username = Auth::user()->name;
        $com->email = Auth::user()->email;
        $com->save();

        return back();

    }

    public function show()
    {
        $dd = Blogs::all();
        return view('blogs', ['dd'=>$dd]);
    }

    public function blogc(Request $request,$id)
    {
        request()->all();
        $com = new blogcomments;
        $com->content = $request->input('content');
        $com->uid = Auth::user()->id;
        $com->username = Auth::user()->name;
        $com->email = Auth::user()->email;
        $com->blog_id = $id;
        $com->save();

        return back();

    }

    public function details($id)
    {
        $data = Blogs::find($id); 
        $results = DB::table('blogcomments')->select('id','content','uid','username','email','blog_id','created_at')
        ->where('blog_id' ,$id)->get()->toArray();
        $counts = count(DB::table('blogcomments')->where('blog_id' ,$id)->get());


        return view('blog-details', compact(['data','results','counts'])); 

    }

    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;
use App\Models\videos;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function upload(Request $request)
    {
        request()->all();
        
            $fileModel = new videos;

            $file = $request->file('file');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/uploads/';
            $file->move($path, $filename);
            //session('user_id');

            $fileModel->video = public_path().'/uploads/';
            $fileModel->user_id = Auth::user()->id;
            $fileModel->name = time().'.'.$request->file->getClientOriginalExtension();
            
            $fileModel->save();
            return redirect('dashboard');
        

    }

    function show($id)
    {
        $data = videos::find($id);
        echo $data;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class EditProfileController extends Controller
{
    public function update(Request $request)
{ 
    $id = Auth::user()->id;
    $file = $request->file('file');
    $filename = time().'.'.$file->getClientOriginalExtension();
    $path = public_path().'/uploads/';
    $file->move($path, $filename);
    $image = $request->input('file');
     
    DB::table('users')->where('id', $id)->update(array('profile_image' => $filename));
    //DB::update('update users set profile_image = ?, where id = ?', [$filename, $id ]);
   
    
    return back();
}
}

<?php

namespace App\Http\Controllers;

use App\Models\comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
class ProductComments extends Controller
{
    public function comments(Request $request)
    {
        request()->all();
        $com = new comments;
        $com->content = $request->input('content');
        $com->user_id = Auth::user()->id;
        $com->username = Auth::user()->name;
        $com->product_id = $request->input('product_id');
        $com->save();

        return back();

    }

    public function index($id)
    {
        $results = DB::table('comments')->select('id','content','user_id','username','product_id','created_at')
        ->where('product_id' ,$id)->get();
        
        return view('item-details',['comments'=>$results]);



    }
}

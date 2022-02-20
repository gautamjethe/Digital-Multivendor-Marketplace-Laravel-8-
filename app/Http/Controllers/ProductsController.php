<?php

namespace App\Http\Controllers;

use App\Models\comments;
use App\Models\Downloads;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class ProductsController extends Controller
{
    public function create(Request $request)
    {
        request()->all();

        $pro = new Products;
        $file = $request->file('file');
        $mainfile = $request->file('mainfile');
        $filename = time().'.'.$file->getClientOriginalExtension();
        $mainfilename = time().'.'.$mainfile->getClientOriginalExtension();
        $image_name = time();
        $mainfile_name = time();
        $path = public_path().'/uploads/';
        $mainpath = public_path().'/uploads/';
        $file->move($path, $filename);
        $mainfile->move($mainpath, $mainfilename);
        $productslug = time();


        $pro->product_slug = $productslug;
        $pro->product_name = $request->product_name;
        $pro->product_shortdes = $request->product_shortdes;
        $pro->product_longdes = $request->input('product_longdes');
        $pro->product_features = $request->input('product_features');
        $pro->product_image = public_path().'/uploads/';
        $pro->image_name = $filename;
        $pro->changelogs = $request->input('changelogs');
        $pro->mainfile_path = public_path().'/uploads/';
        $pro->mainfile_name = $mainfilename;
        $pro->version = $request->version;
        $pro->downloads = '0';
        $pro->user_id = Auth::user()->id;
        $pro->author_name = Auth::user()->name;
        $pro->live_preview = $request->input('live_preview');
        $pro->updated = date('Y-M-d');
        
        //$pro->video = public_path().'/uploads/';
        //$pro->user_id = Auth::user()->id;
        //$pro->name = time().'.'.$request->file->getClientOriginalExtension();
            
        $pro->save();
        $id = Auth::user()->id;
        $count = Downloads::find($id);
        User::where('id',$id)
        ->increment('products', 1 );
        //DB::table('users')->where('id', $id)->update(array('profile_image' => $filename));

        return redirect('dashboard');

    }

    function show($id)
    {
        

        $data = Products::find($id);  
        $results = DB::table('comments')->select('id','content','user_id','username','email','product_id','created_at')
        ->where('product_id' ,$id)->get()->toArray();
       

        
        
        
        $use = $data['user_id'];   
        

        $counts = count(DB::table('comments')->where('product_id' ,$id)->get());

        //return view('home',compact('count'));
        // $email = $results;
        // $default = "https://www.gravatar.com/avatar/";
        // $size = 40;
        // $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $results['email'] ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;

        return view('item-details', compact(['data','results','counts']));        
        //return view('item-details', compact(['results']));
        
         
    }

    function home()
    {
        $home = Products::all();
        return view('welcome',['products'=>$home]);
    }

    function download($id)
    {
        $dow = Products::find($id);
        return view('download-item',['download'=>$dow]);
    }
    
    public function downloadcount($id)
    {
        $count = Downloads::find($id);
        Products::where('id',$id)
        ->increment('downloads', 1 );
        $rt = $count['mainfile_name'];
        return redirect("http://localhost:8000/uploads/$rt");
        
    }

    public function dashboard()
    {
        $id = Auth::user()->id;
        $data = User::find($id);  
        //$use = $data['user_id'];   
        return view('dashboard', ['product'=>$data]);


    }

    public function listpro()
    {
        $id = Auth::user()->id;
        $data = Products::find($id)->get()->toArray();
        return view('update-item', ['list'=>$data]);
    }

    public function editproduct($id)
    {
        $datauser = Products::find($id);
        //$userid = $datauser['user_id'];
        if($datauser['user_id'] == Auth::user()->id){
        $data = Products::find($id);
        return view('edit-product', ['cnf'=>$data]);
        }
        else{
            return redirect ('/dashboard');
        }
    }
    public function realedit(Request $request)
    {
        request()->all();
        
        $file = $request->file('file');
        $mainfile = $request->file('mainfile');
        $filename = time().'.'.$file->getClientOriginalExtension();
        $mainfilename = time().'.'.$mainfile->getClientOriginalExtension();
        $image_name = time();
        $mainfile_name = time();
        $path = public_path().'/uploads/';
        $mainpath = public_path().'/uploads/';
        $file->move($path, $filename);
        $mainfile->move($mainpath, $mainfilename);
        $productslug = time();
        $id = $request->input('product_id');


        $product_slug = $productslug;
        $product_name = $request->product_name;
        $product_shortdes = $request->product_shortdes;
        $product_longdes = $request->input('product_longdes');
        $product_features = $request->input('product_features');
        $product_image = public_path().'/uploads/';
        $image_name = $filename;
        $changelogs = $request->input('changelogs');
        $mainfile_path = public_path().'/uploads/';
        $mainfile_name = $mainfilename;
        $version = $request->version;
        //$downloads = '0';
        $user_id = Auth::user()->id;
        $author_name = Auth::user()->name;
        $live_preview = $request->input('live_preview');
        $updated = date('Y-m-d');

        DB::table('products')->where('id', $id)->update(array('product_slug' => $product_slug, 'product_name'=> $product_name, 'product_shortdes'=>$product_shortdes,'product_longdes'=>$product_longdes,'product_features'=>$product_features,'product_image'=>$product_image,'image_name'=>$image_name,'changelogs'=>$changelogs,'mainfile_path'=>$mainfile_path,'mainfile_name'=>$mainfile_name,'version'=>$version,'live_preview'=>$live_preview,'updated'=>$updated ));
        return back()->with('success', 'Item updated successfully');
    }

    function showall($id)
    {
        $results = DB::select('select * from comments where product_id = :id', ['id' => $id]);
        
        return view('item-details',['comments'=>$results]);
    }
}


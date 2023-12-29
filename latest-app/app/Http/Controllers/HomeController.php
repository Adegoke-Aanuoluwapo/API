<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Alert;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if(Auth::id()){
            $post =Post::where('post_status','=','active')->get();
            $usertype = Auth()->user()->usertype;
            if($usertype == 'user'){
                return view('home.homepage',compact('post'));  //for user home page
            }
            elseif($usertype == 'admin'){
                return view('admin.adminhome');
            }
            else{
                return redirect()->back();
            }
        }

    }

public function homepage(){
        $post = Post::where('post_status','=','active')->get();
    return view('home.homepage', compact('post'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $user = Auth()->user();
        $userid = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;
        $post = new Post;
        $post->title= $request->title;
        $post->description=$request->description;
        $post->user_id=$userid;
        $post->name=$name;
         $post->post_status ='pending';
        $post->usertype=$usertype;
        $image = $request->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('postimage',$imagename);
            $post->image=$imagename;
        }


        $post->save();
        Alert::success('Congrats','You have added the post successfully');

        return redirect()->back();
        
    }

    function createpost(){
        return view('home.create_post');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function personalpost()
    {
        $user =Auth::User();
        $userid = $user->id;
        $data =Post::where('user_id', '=',$userid)->get();
        return view('home.mypost', compact('data') );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);

        return view('home.blogpost', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post =Post::find($id);
        return view('home.edit_post', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post =Post::find($id);
        $post->title=$request->title;
         $post->description=$request->description;
        $image =$request->image;

        if($image)
        {
          $imagename=time().'.'.$image->getClientOriginalExtension();  
          $request->image->move('postimage', $imagename);

          $post->image=$imagename;
        }
        $post->save();

        return redirect()->back()->with('message','Post Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data =Post::find($id);
        $data->delete();

        return redirect()->back()->with('Data deleted successfully');
    }
}

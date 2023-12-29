<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        
        return view('admin.post_page');
    }

     public function showAllPost(){
        $post = Post::all();
        
        return view('admin.show_post',compact('post'));
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
        $post->title=$request->title;
         $post->description=$request->description;
            $post->post_status='active';
            $post->user_id = $userid;
           
            $post->name= $name ;
             $post->usertype=$usertype;

          
            $image=$request->image;

            if($image){
$imagename =time().'.'.$image->getClientOriginalExtension();

         $request->image->move('postimage', $imagename); 
         $post->image = $imagename;
            }
        
         

         $post->save();

         return redirect()->back()->with('message','post added successfully');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        

    }

    public function acceptpost($id)
    {
        $post =Post::find($id);
        $post -> post_status = 'active' ;
        $post -> save() ;

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('admin.edit_page', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Post::find($id);
        $data->title =$request->title;
        $data->description=$request->description;
        $image=$request->image;

        if($image)
        {
            $imagename =time().'.'.$image->getClientOriginalExtension();

         $request->image->move('postimage', $imagename); 
         $data->image = $imagename;
        }
        $data->save();
        return redirect()->back()->with('message','post edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post =  Post::find($id);
        $post->delete();

        return redirect()->back()->with('message', 'Post deleted successfully');

    }
}

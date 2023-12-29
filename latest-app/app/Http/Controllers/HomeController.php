<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if(Auth::id()){
            $post =Post::all();
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
        $post = Post::all();
    return view('home.homepage', compact('post'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
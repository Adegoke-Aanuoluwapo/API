<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class BranchController extends Controller
{
    //
    public function index(){
        return view('branchtutors.branch');
    }

    public function signup(){
        return view('branchtutors.signup');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        Student::create($input);
        return redirect('student')->with('flash_message', 'Student added successfully');

    }
    public function login(){
        return view('branchtutors.login');
    }
}
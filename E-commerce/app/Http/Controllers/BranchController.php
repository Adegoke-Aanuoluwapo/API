<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    //
    public function index(){
        return view('branch');
    }

    public function signup(){
        return view('branchtutors.signup');
    }
}
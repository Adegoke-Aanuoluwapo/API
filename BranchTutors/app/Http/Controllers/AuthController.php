<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function loadRegister(){
        return view('register');
    }


    public function studentRegister(Request $request){
        $input = $request->validate(['name' => 'string|required|min:2',
            'password'=> 'string|required|min:2',
            'email'=> 'string|required|confirmed|min:4',
            'guardian' => 'string|required|confirmed|min:4' ,
            
            'phone' => 'string|required|max:11|unique:users',
            'address' => 'string|required|min:2',
            'mobile' => 'string|required|min:2',
            'school' => 'string|required|min:2',
            'department' => 'string|required|min:2',
            'subtaken' => 'string|required|min:2',
            'diffsub' => 'string|required|min:2',
            'intresub' => 'string|required|min:2',
            'intended_school' => 'string|required|min:2',
            'jamb_comb' => 'string|required|min:2'
    ]);
        $user = new User;
        $user->password =Hash::make($request->password);
        User::create($input);
        return redirect('student')->with('flash_message', 'Student added successfully');
    }
}
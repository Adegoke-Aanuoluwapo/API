<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loadRegister(){
        return view('register');
    }


    public function studentRegister(Request $request){
        $request->validate(['name' => 'string|required|min:2',
            'email' => 'string|required|min:4',
            'password'=> 'string|required|min:2',
            'sex' => 'string|required|min:4',
            'guardian' => 'string|required|min:4' ,
            
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
        $user->name =$request->name;
        $user->email =$request->email;
        $user->password =Hash::make($request->password);
        $user->sex = $request->sex;
        $user->guardian  =$request->guardian;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->mobile = $request->mobile;
        $user->school = $request->school;
        $user->department = $request->department;
        $user->subtaken = $request->subtaken;
        $user->diffsub = $request->diffsub;
        $user->intresub = $request->intresub;
        $user->intended_school = $request->intended_school;
        $user->jamb_comb = $request->jamb_comb;
        
        $user->save();
        
        return back()->with('success', 'Student added successfully');
    }
    
    public function loadLogin(){
        return view('login');
    }

    public function userLogin(Request $request){
        $request->validate([
            'email'=>'string|required|email',
            'password'=>'string|required'
        ]);
        $userCredentials =$request->only('email', 'password');
        
        if(Auth::attempt($userCredentials)){
            if(Auth::user()->is_admin == 1){
                return redirect('/admin/dashboard')->with('redirect', 'You are welcome');
                        }
                else{
                return redirect('/dashboard')->with('redirect', 'You are welcome');
                }
        }
        else{
            return back()->with('error', 'Username & Password is incorrect ');
        }
    }

    public function loadAdminDashboard(){
        $students = User::where('is_admin', 0)->count();
        return view('admin.dashboard', ['students' =>$students]);
    }

    public function loadDashboard(){
        return view('student.dashboard');
    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect('/login');
    }
}
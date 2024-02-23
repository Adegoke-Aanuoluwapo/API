<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the incoming request data
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => 'string|required|confirmed|min:6',
        ]);

        // Create a new user
        $user = User::create([
            'name' => $request->name,
            'email' => strtolower($request->email), // Ensure email is lowercase
            'password' => Hash::make($request->password),
        ]);

        // Trigger the Registered event
        event(new Registered($user));

        // Attempt to log in the newly registered user
        if (Auth::login($user)) {
            // Check if the user is an admin
            if (Auth::user()->is_admin == 1) {
                return redirect('/admin/dashboard');
            } else {
                return redirect('/dashboard');
            }
        } else {
            // If login fails for some reason, redirect to HOME
            return redirect(RouteServiceProvider::HOME);
        }
    }

    // public function store(Request $request): RedirectResponse
    // {
    //     $request->validate([
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
    //         'password' => 'string|required|confirmed|min:6',
    //     ]);

    //     $user = User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);

    //     event(new Registered($user));

    //   if(Auth::login($user)){
    //         if (Auth::user()->is_admin == 1) {
    //             return redirect('/admin/dashboard');
    //         }
    //         else{
    //             return redirect('/dashboard');
    //         }
        
    //   }
    //   else{
    //         return redirect(RouteServiceProvider::HOME);
    //   }
       
        

        
    // }
}
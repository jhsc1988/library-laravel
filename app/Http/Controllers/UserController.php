<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show Register/Create Form
    public function create(){
        return view ('users.register');
    }

    // Create New Users
    public function store(Request $request){
        $formFields = $request->validate([
            'name'=>['required', 'min:3'],
            'surname'=>['required', 'min:3'],
            'email'=>['required', 'email', Rule::unique('users', 'email')],
            'password'=>['required', 'confirmed','min:6']
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/')->with('message','User created and logged in');
    }

    // Show Login Form
    public function login(){
        return view ('users.login');
    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message', 'You have been logged out!');
    }

    // Authenticate User
    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email'=>['required', 'email'],
            'password'=>'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'You are now logged in');
        }

        $user = User::where('email', $formFields['email'])->first();
        if (!$user) {
            return back()->withErrors(['email'=> 'Invalid Credentials'])->onlyInput('email');
        }

        if (!Hash::check($formFields['password'], $user->getAuthPassword())) {
            return back()->withErrors(['password'=> 'Invalid Password'])->onlyInput('password');
        }

        return abort(500, 'An internal server error occurred. Please try again later.');
    }
}


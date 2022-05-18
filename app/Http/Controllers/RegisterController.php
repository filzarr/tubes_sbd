<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('web.register');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:100'
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        $request->session()->flash('success', 'Registration succesfull! Please login');
        return redirect('/login');
    }   
}

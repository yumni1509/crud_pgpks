<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            'title' => 'Register',
            'active' =>  'register'
        ]);
    }

    //untuk masuk ke database
    public function store(Request $request)
    {
        //data yang dimasukkan dalam database
       $validatedData = $request->validate([
           'name' => 'required|max:255',
           'username' => ['required','min:3', 'max:255', 'unique:users'],
           'email' => 'required|email|unique:users',
           'password'=> 'required|min:5|max:255'
       ]);

       //untuk encrypt password
       $validatedData['password'] = bcrypt($validatedData['password']);
    //    $validatedData['password'] = Hash::make($validatedData['password']);

       //method validatedData
       User::create($validatedData);

    //    $request->session()->$request->flash('success','Registration successfull!! Please login again');

       //kembali ke page login
       return redirect('/login')->with('success','Registration successfull!! Please login again');
    }
}

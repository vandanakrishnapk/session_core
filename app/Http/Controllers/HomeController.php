<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function dologin()
    {
       
        $username=request('username');
        $password=request('password');
        if(auth()->attempt([
            'username'=>$username,
            'password'=>$password
        ]))
        {
            return redirect()->route('index');
        }
        else{
            return redirect()->route('do.login')->with('message',"Invalid Login");
          }
    }
    public function index()
    {
        return view('index');
    }
    public function logout()
    {
   auth()->logout();
   return redirect()->route('login');
    }
    
}

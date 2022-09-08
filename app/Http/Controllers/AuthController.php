<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /*  login用記述  */
    
    public function index_login()
    {
        return view('login');
    }
    
    public function login(LoginRequest $request)
    {
        $email = $request->email;
        $password = $request->password;
        
        $is_account = Auth::attempt([
            'email' => $email,
            'password' => $password,
        ]);
        
        if($is_account) {
            return redirect('/');
        } else {
            return redirect('login');
        }
    }
    
    public function logout()
    {
        Auth::logout();
        
        return redirect('/login');
    }
    
    /*  register用記述  */
    
    public function index_register()
    {
        return view('register');
    }
    
    public function register(RegisterRequest $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        
        User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);
        
        return redirect('/login');
    }
}
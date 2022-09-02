<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
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
            'password' => $password,
            'password' => Hash::make('password'),
        ]);
        
        return redirect('/login');
    }

    /*  login用記述  */
    
    public function index_login()
    {
        return view('login');
    }
    
    public function login(Request $request)
    {
        $decryptPassword = decrypt($request->password);
    }
    

    

}
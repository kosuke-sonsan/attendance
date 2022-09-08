<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use \Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    /*  login用記述  */
    
    public function index_login()
    {
        return view('login');
    }
    
    public function login(Request $request) 
    {
        $credentials = $request->only('email', 'password');
        
        if(Auth::gurd('attendance')->attempt($credentilas)){
            return redirect()->intended();
            
            $user = User::find($user_id);
            $user->save();
        }
        
        return 'login failed!';
    }
}

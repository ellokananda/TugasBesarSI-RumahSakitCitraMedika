<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class LoginController extends Controller
{
    public function login(Request $request){
        $credentials = [
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }
        return 'Failure';
    }
    public function logout(){
        //Auth::logout();
        session()->invalidate();
        return redirect("/");
    }
}

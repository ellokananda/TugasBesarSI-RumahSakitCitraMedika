<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class LoginController extends Controller
{
    public function login(Request $request){
        $credentials = [
            'username' => session ('username'),
            'password' => session ('password')
        ];

        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }
        return 'Failure';
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    function goToLogin(): View|Factory|Application
    {
        return view('login');
    }

    function validateLogin(Request $request){
        $email = $request['email'];
        $password = $request['password'];

        if (Auth::Attempt(['email' => $email, 'password' => $password])){
            request()->session()->regenerate();

            return redirect('halaman_utama');
        }

        return back();
    }
}

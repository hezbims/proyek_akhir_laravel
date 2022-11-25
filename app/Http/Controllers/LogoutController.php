<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    function goToLogin(): Redirector|Application|RedirectResponse
    {
        Auth::logout();
        return redirect('login');
    }
}

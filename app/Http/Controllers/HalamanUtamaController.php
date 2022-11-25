<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class HalamanUtamaController extends Controller
{
    function goToHalamanUtama(): Factory|View|Application|RedirectResponse
    {
        if (Auth::check())
            return view('halaman_utama' , [
                'datas' => Barang::all(),
                'userId' => Auth::id()
            ]);
        return redirect()->to('login');
    }
}

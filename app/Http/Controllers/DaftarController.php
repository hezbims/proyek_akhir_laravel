<?php

namespace App\Http\Controllers;

use App\Models\User;

class DaftarController extends Controller
{
    //
    function goToDaftar(){
        return view('daftar');
    }

    function validateDaftar(){
        $validatedData = request()->validate([
            'name' => ['required'],
            'email' => ['email:dns' , 'required'],
            'password' => ['min_digits:8' , 'max_digits:16' , 'required']
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('login')->with('success' , 'Pesan sukses');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class BeliController extends Controller
{
    //
    function beliBarang(Request $request){
        Transaksi::create([
            "id_user" => $request['id_user'],
            "id_barang" => $request['id_barang']
        ]);
        return back();
    }
}

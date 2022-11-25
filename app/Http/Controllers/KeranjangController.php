<?php

namespace App\Http\Controllers;

use App\Models\User;

class KeranjangController extends Controller
{
    //
    function goToKeranjang(User $user){
        $filteredTransaksi = $user->getTransaksi();
        $filteredBarang = array();

        if ($filteredTransaksi->count() > 0) {
            foreach ($filteredTransaksi as $transaksi) {
                dd($transaksi);
                $filteredBarang[] = $transaksi->getBarang();
            }
        }
        dd($filteredBarang);

        return view('keranjang' , ['barangUser' => $filteredBarang]);
    }
}

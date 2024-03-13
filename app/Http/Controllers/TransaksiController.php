<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BarangController;
use App\Models\Barang;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TransaksiController extends Controller
{
    // Menampilkan semua transaksi
    public function index()
    {
         $transaksis = Transaksi::all();
       return view('transaksi/index',compact('transaksis'));
    }

    public function create()
    {
        //  $barangs = Barang::get();
        //  $barangs = request ('id_barang');
        //  $barangs = Barang::find($barangs);

         $act = request('act');
         $qty = request('qty');
         if($act == 'min'){
         $qty = $qty + 1;
        
        }
         $qty = request('');
    return view('transaksi.create');
    }

    
}
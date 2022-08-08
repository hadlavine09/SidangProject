<?php

namespace App\Http\Controllers;

use App\Models\Kategori_obat;
use App\Models\Obat;
use App\Models\Pembeli;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class ApotekController extends Controller
{
    public function index()
    {
        $obats = Obat::all();
        return view('welcome', compact('obats'));
    }

    public function about()
    {
        return view('about');
    }

    public function shop(Request $request)
    {
        $data = $request->all();
        $obats = Obat::all();
        // dd($data);
        if ($data) {
            $obats = Obat::where('id_kategori', $data['kategori'])->get();
        }
        $kategori = Kategori_obat::all();
        // dd(count($kategori));
        return view('shop', compact('obats', 'kategori'));
    }
    public function kategori()
    {
        //menampilkan semua data dari model Kategori
        $kategori = Kategori_obat::all();
        return view('shop', compact('kategori'));
    }

    public function singleShop(Obat $obat)
    {
        // dd($obat);
        return view('single_shop', compact('obat'));
    }
    public function cart()
    {
        // dd($obat);
        $obat = Obat::all();
        return view('cart', compact('obat'));
    }
    public function checkout()
    {
        $pembeli = Pembeli::all();
        return view('checkout', compact('pembeli'));
    }
    public function transaksi()
    {
        $transaksi = Transaksi::all();
        return view('transaksi', compact('transaksi'));
    }
    public function thankyou()
    {
        return view('thankyou');
    }
}

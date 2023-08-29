<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Models\DataBarang;
use App\Models\Keranjang;

class TransaksiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    private function calculateTotal($keranjang)
    {
        $total = 0;

        foreach ($keranjang as $item) {
            $total += $item['subtotal'];
        }

        return $total;
    }

    public function trx_umum()
    {
        if (Gate::check('admin')) {
            $data_barang = DataBarang::all();
            $keranjang = Keranjang::all();
            $total = $this->calculateTotal($keranjang);
            return view('admin.transaksi.trx_umum', compact(['data_barang'], ['keranjang'], ['total']), ["title" => "Transaksi Umum"]);
        } else {
            $idTokoAktif = Auth::user()->id_toko;
            $data_barang = DataBarang::where('id_toko', $idTokoAktif)->get();
            $keranjang = Keranjang::where('id_toko', $idTokoAktif)->get();
            $total = $this->calculateTotal($keranjang);
            return view('admin.transaksi.trx_umum', compact(['data_barang'], ['keranjang'], ['total']), ["title" => "Transaksi Umum"]);
        }
    }

    public function trx_grosir()
    {
        return view('admin.transaksi.trx_grosir', ["title" => "Transaksi Grosir"]);
    }

    public function trx_servis()
    {
        return view('admin.transaksi.trx_servis', ["title" => "Transaksi Servis"]);
    }

    public function trx_logs()
    {
        return view('admin.transaksi.trx_logs', ["title" => "Logs Transaksi"]);
    }

    public function tambah_keranjang(Request $request)
    {
        $produk = DataBarang::find($request->input('id_barang'));
        $qty = $request->input('jumlah');

        // Validasi stok
        if ($qty > $produk->stok) {
            return redirect('/trx_umum')->with('error', 'Stok tidak mencukupi.');
        }

        // Tambahkan produk ke keranjang
        $keranjangItem = [
            'id_toko' => Auth::user()->id_toko,
            'nama' => $produk->nama,
            'harga' => $produk->harga_umum,
            'jumlah' => $qty,
            'subtotal' => $produk->harga_umum * $qty,
        ];
        Keranjang::create($keranjangItem);

        return redirect('trx_umum')->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }
}

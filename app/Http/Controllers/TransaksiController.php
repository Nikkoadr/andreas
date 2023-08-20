<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function trx_umum()
    {
        return view('admin.transaksi.trx_umum');
    }

    public function trx_grosir()
    {
        return view('admin.transaksi.trx_grosir');
    }

    public function trx_member()
    {
        return view('admin.transaksi.trx_member');
    }

    public function trx_logs()
    {
        return view('admin.transaksi.trx_logs');
    }
}

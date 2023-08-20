<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatabaseController extends Controller
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
    public function data_toko()
    {
        return view('admin.database.data_toko');
    }

    public function data_pegawai()
    {
        return view('admin.database.data_pegawai');
    }

    public function data_supplier()
    {
        return view('admin.database.data_supplier');
    }

    public function data_barang()
    {
        return view('admin.database.data_barang');
    }
    public function data_member()
    {
        return view('admin.database.data_member');
    }
}

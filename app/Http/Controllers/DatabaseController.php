<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use App\Models\DataSupplier;
use App\Models\DataToko;
use App\Models\User;
use App\Models\DataMember;
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
        $data_toko = DataToko::latest()->paginate(100);
        return view('admin.database.data_toko', compact(['data_toko']), ["title" => "Data Toko"]);
    }

    public function data_pegawai()
    {
        $data_pegawai = User::latest()->paginate(100);
        return view('admin.database.data_pegawai', compact(['data_pegawai']), ["title" => "Data Pegawai"]);
    }

    public function data_supplier()
    {
        $data_supplier = DataSupplier::latest()->paginate(100);
        return view('admin.database.data_supplier', compact(['data_supplier']), ["title" => "Data Supplier"]);
    }

    public function data_barang()
    {
        $data_barang = DataBarang::latest()->paginate(100);
        return view('admin.database.data_barang', compact(['data_barang']), ["title" => "Data Barang"]);
    }
    public function data_member()
    {
        $data_member = DataMember::latest()->paginate(100);
        return view('admin.database.data_member', compact(['data_member']), ["title" => "Data member"]);
    }
}

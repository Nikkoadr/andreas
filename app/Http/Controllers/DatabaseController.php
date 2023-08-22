<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use App\Models\DataSupplier;
use App\Models\DataToko;
use App\Models\User;
use App\Models\DataMember;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if (Gate::allows('admin')) {
            $data_toko = DataToko::latest()->paginate(100);
            return view('admin.database.data_toko', compact(['data_toko']), ["title" => "Data Toko"]);
        } else {
            return back();
        }
    }

    public function data_pegawai()
    {
        if (Gate::denies('karyawan')) {
            if (Gate::check('admin')) {
                $data_pegawai = User::all();
                return view('admin.database.data_pegawai', compact(['data_pegawai']), ["title" => "Data Pegawai"]);
            } else {
                $idTokoAktif = Auth::user()->id_toko;
                $data_pegawai = User::where('id_toko', $idTokoAktif)->get();
                return view('admin.database.data_pegawai', compact(['data_pegawai']), ["title" => "Data Pegawai"]);
            }
        } else {
            return back();
        }
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

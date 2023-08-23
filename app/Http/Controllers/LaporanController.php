<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class LaporanController extends Controller
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
    public function laporan_harian()
    {
        if (Gate::denies('karyawan')) {
            return view('admin.laporan.laporan_harian', ["title" => "Laporan Harian"]);
        } else {
            return back();
        }
    }

    public function laporan_bulanan()
    {
        if (Gate::denies('karyawan')) {
            return view('admin.laporan.laporan_bulanan', ["title" => "Laporan Bulanan"]);
        } else {
            return back();
        }
    }

    public function laporan_tahunan()
    {
        if (Gate::denies('karyawan')) {
            return view('admin.laporan.laporan_tahunan', ["title" => "Laporan Tahunan"]);
        } else {
            return back();
        }
    }
}

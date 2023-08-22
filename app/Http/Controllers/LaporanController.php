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
            return view('admin.laporan.laporan_harian');
        } else {
            return back();
        }
    }

    public function laporan_bulanan()
    {
        if (Gate::denies('karyawan')) {
            return view('admin.laporan.laporan_bulanan');
        } else {
            return back();
        }
    }

    public function laporan_tahunan()
    {
        if (Gate::denies('karyawan')) {
            return view('admin.laporan.laporan_tahunan');
        } else {
            return back();
        }
    }
}

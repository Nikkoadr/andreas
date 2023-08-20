<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('admin.laporan.laporan_harian');
    }

    public function laporan_bulanan()
    {
        return view('admin.laporan.laporan_bulanan');
    }

    public function laporan_tahunan()
    {
        return view('admin.laporan.laporan_tahunan');
    }
}

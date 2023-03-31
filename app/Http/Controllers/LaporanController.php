<?php

namespace App\Http\Controllers;

use App\Pengaduan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function laporan()
    {
        $pengaduan = Pengaduan::where('nik', auth()->user()->nik)->get();
        // $pengaduan = Pengaduan::orderBy('created_at', 'DESC')->get();
	    return view('laporan', compact('pengaduan'));
    }

    public function cetak()
    {
        $laporan = Laporan::all();
        return view('cetak', compact('laporan'));
    }
}

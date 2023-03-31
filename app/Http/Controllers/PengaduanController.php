<?php

namespace App\Http\Controllers;

use App\Pengaduan;
use App\Tanggapan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function pengaduantanggapan($id_pengaduan)
    {
        $pengaduan = Pengaduan::findOrFail($id_pengaduan);
        $tanggapan = Tanggapan::where('id_pengaduan', $id_pengaduan)->first();
        return view('pengaduantanggapan', compact('pengaduan','tanggapan'));
    }

    public function index()
    {
        $tanggapan = Tanggapan::all();
        $pengaduan = Pengaduan::all();
    	return view('pengaduan.index', compact('pengaduan','tanggapan'));
    }

    public function laporan()
    {
        $pengaduan = Pengaduan::where('nik', auth()->user()->nik)->get();
        // dd($pengaduan);
        // $data = Pengaduan::all();
        // return auth()->user()->nik;
        return view('laporan',compact('pengaduan'));
    }

    /**
     * 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $pengaduan = Pengaduan::all();
        return view('pengaduan.create', compact('pengaduan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $message = ([
            'required' => "Data tidak boleh kosong!",
        ]);

        $this->validate($request,[
            'tgl_pengaduan' => 'required',
    		'isi_laporan' => 'required',
            'foto' => 'required',
            
    	]);
        
        $imgName = $request->foto->getClientOriginalName() . '-' . time() . '-' . $request->foto->extension();
        $request->foto->move(public_path('img'),$imgName);

        Pengaduan::create([
    		'tgl_pengaduan' => $request->tgl_pengaduan,
            'nik' => auth()->user()->nik,
            'isi_laporan' => $request->isi_laporan,
            'foto' => $imgName,
            'status' => 'Pending'

    	]);

    	return redirect('/pengaduan/create')->with('Toast_Success', 'Data Berhasil Disimpan!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_pengaduan)
    {
        $pengaduan = Pengaduan::with(['pengaduan'])->findOrFail($id_pengaduan);
        $tanggapan = Tanggapan::where('id_pengaduan', $id_pengaduan)->first();
    
        return view('pengaduan.show',compact('pengaduan','tanggapan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_pengaduan)
    {
        $pengaduan = Pengaduan::find($id_pengaduan);
        return view('pengaduan.edit',compact('pengaduan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pengaduan)
    {
        $this->validate($request,[
            'tgl_pengaduan' => 'required',
            'nik' => 'required',
            'isi_laporan' => 'required',
            'foto' => 'required'
         ]);

         $pengaduan = Pengaduan::find($id_pengaduan);
         $pengaduan->tgl_pengaduan = $request->tgl_pengaduan;
         $pengaduan->nik = $request->nik;
         $pengaduan->isi_laporan = $request->isi_laporan;
         $pengaduan->foto = $request->foto;
         $pengaduan->save();

         return redirect('/pengaduan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id_pengaduan)
    {
        $pengaduan = Pengaduan::find($id_pengaduan);
        $pengaduan->delete();

        return redirect('/pengaduan')->with('Toast_Success', 'Data Berhasil, Data Berhasil dIHAPUS!');
    }

    public function cetak()
    {
        $pengaduan = Pengaduan::all();
        return view('cetak', compact('pengaduan'));
    }
}

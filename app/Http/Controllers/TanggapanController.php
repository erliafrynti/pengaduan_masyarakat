<?php

namespace App\Http\Controllers;

use App\Pengaduan;
use App\Tanggapan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduan = Pengaduan::all();
        $tanggapan = Tanggapan::all();
        return view('tanggapan.index',compact('tanggapan','pengaduan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengaduan = Pengaduan::get();
        $tanggapan = Tanggapan::all();
        return view('tanggapan.create', compact('pengaduan','tanggapan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'id_pengaduan' => 'required',
            'tgl_tanggapan' => 'required',
            'tanggapan' => 'required',
            
        ]);
 
        Tanggapan::create([
            'id_pengaduan' => $request->id_pengaduan,
            'tgl_tanggapan' => $request->tgl_tanggapan,
            'tanggapan' => $request->tanggapan,
            'nik' => auth()->user()->nik,
        ]);

        $pengaduan = Pengaduan::find($request->id_pengaduan);
        // dd($pengaduan);
        $pengaduan->status = $request->status;
        $pengaduan->save();


        // $data_tanggapan = new Tanggapan();
        // $data_tanggapan->tgl_tanggapan = request()->get('tgl_tanggapan');
        // $data_tanggapan->id_pengaduan = request()->get('id_pengaduan');
        // $data_tanggapan->tanggapan = request()->get('tanggapan');
        // $data_tanggapan->nik = request()->get('nik');
        // $data_tanggapan->id_tanggapan = Auth::user()->id_tanggapan;
        // $data_tanggapan->save();
        // return redirect()->back();
 
        return redirect('/pengaduan')->with('toast_success','Tanggapan Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_tanggapan)
    {
        $tanggapan = Tanggapan::find('$id_tanggapan');
        return view('tanggapan.edit',compact('tanggapan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_tanggapan)
    {

        // $this->validate($request,[
        //     'id_pengaduan' => 'required',
        //     'tgl_tanggapan' => 'required',
    	// 	'tanggapan' => 'required',
        //     'nik' => 'required',
        //  ]);

        //  $tanggapan = Tanggapan::find('$id_tanggapan');
        //  $tanggapan->id_pengaduan = $request->id_pengaduan;
        //  $tanggapan->tgl_tanggapan = $request->tgl_tanggapan;
        //  $tanggapan->tanggapan = $request->tanggapan;
        //  $tanggapan->nik = $request->nik;
        //  $tanggapan->save();

        //  return redirect('tanggapan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id_tanggapan)
    {
        $tanggapan = Tanggapan::find($id_tanggapan);
        $tanggapan->delete();

        Pengaduan::where('id_pengaduan','$id')->delete();

        return redirect('/tanggapan');
    }
}

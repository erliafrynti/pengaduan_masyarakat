@extends('template')
@section('content')

        <div class="container">
            <div class="card mt-5">
                <div class="card-body">
                    <h4 class="page-title"><strong>Data Pengaduan</strong></h4>
                         
                        <div class="form-group">
                        <strong>Tanggal Pengaduan:</strong>
                        {{ $pengaduan->tgl_pengaduan }}
                        </div>

                        <div class="form-group">
                        <strong>Nik:</strong>
                        {{ $pengaduan->nik }}
                        </div>

                        <div class="form-group">
                        <strong>Isi Laporan:</strong>
                        {{ $pengaduan->isi_laporan }}
                        </div>

                        <div class="form-group">
                        <td>
                        <img src="{{ asset('img/'. $pengaduan->foto) }}" height="50%" width="50%">
                        </td> 
                        </div>
                        

                        <div class="form-group">
                        <strong>Status:</strong>
                            @if ($pengaduan->status == 'pending')
                            <span class="badge bg-danger">{{ $pengaduan->status }}</span>
                            @elseif ($pengaduan->status == 'proses')
                            <span class="badge bg-warning">{{ $pengaduan->status }}</span>
                            @else
                            <span class="badge bg-success">{{ $pengaduan->status }}</span>
                            @endif
                                
                    </form>
                </div>
            </div>
        </div>
    </div>
                    
                    
        <div class="container">
            <div class="card mt-5">
                <div class="card-body">
                        <h4 class="page-title"><strong>Tanggapan</strong></h4>
                    <form method="post" action="/tanggapan/store" enctype="multipart/form-data">
 
                        {{ csrf_field() }}

                        <!-- <div class="form-group">
                            <label>Id Pengaduan</label> -->
                            <input type="text" name="id_pengaduan" id="id_pengaduan" class="form-control" placeholder="" value="{{ $pengaduan->id_pengaduan }}" hidden>

                            <!-- @if($errors->has('id_pengaduan'))
                                <div class="text-danger">
                                    {{ $errors->first('id_pengaduan')}}
                                </div>
                            @endif -->
                        

                        <div class="form-group">
                            <label>Tanggal/Jam tanggapan</label>
                            <input type="" name="tgl_tanggapan" class="form-control" placeholder="" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date( "d-m-Y | H:i:s"); ?>" readonly>
                        </div>
                        
                        <div class="form-group">
                            <label>Tanggapan</label>
                            <textarea name="tanggapan" class="form-control" placeholder=""></textarea>
 
                             @if($errors->has('tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggapan')}}
                                </div>
                            @endif
 
                        </div>

                        <label for="status">Status: </label>
                        <!-- <select name="status">
                            <option value="proses">Proses</option>
                            <option value="selesai">Selesai</option>
                        </select> -->
                        <select class="form-control" name="status" id="status">
                            <option value="Proses" selected="">Proses</option>
                            <option value="Selesai">Selesai</option>
                        </select>
                            @if($errors->has('status'))
                                <div class="text-danger">
                                    {{ $errors->first('status')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" onclick="return confirm('Anda yakin ingin menyimpan item ini ?')" value="Simpan">
                            <a href="/pengaduan" class="btn btn-primary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection

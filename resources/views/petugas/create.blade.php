@extends('template')
@section('content')
<div class="content">
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <strong>TAMBAH PETUGAS</strong>
            </div>
            <div class="card-body">
                <br/>
                <br/>

                <form method="post" action="/petugas/store">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Tanggal Pengaduan</label>
                        <input type="date" name="tgl_pengaduan" class="form-control" placeholder=""></input>

                        @if($errors->has('tgl_pengaduan'))
                            <div class="text-danger">
                                {{ $errors->first('tgl_pengaduan')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Nik</label>
                        <input type="text" name="nik" class="form-control"></input>

                         @if($errors->has('nik'))
                            <div class="text-danger">
                                {{ $errors->first('nik')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Isi Laporan</label>
                        <input type="text" name="isi_laporan" class="form-control"></input>

                         @if($errors->has('isi_laporan'))
                            <div class="text-danger">
                                {{ $errors->first('isi_laporan')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto" class="form-control"></input>

                         @if($errors->has('foto'))
                            <div class="text-danger">
                                {{ $errors->first('foto')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <strong>Status</strong>
                        <br>
                        <br>
                        <input type="radio" name="status"  value="proses"> Proses</p>
                        <input type="radio" name="status"  value="selesai"> Selesai</p>

                         @if($errors->has('status'))
                            <div class="text-danger">
                                {{ $errors->first('status')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <a href="/pengaduan" class="btn btn-primary">Kembali</a>
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
@endsection

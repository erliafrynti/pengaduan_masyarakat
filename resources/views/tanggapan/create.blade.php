@extends('template')
@section('content')
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <br>
                    <strong>TAMBAH TANGGAPAN</strong>
                </div>
                <div class="card-body">
                    <br/>
                    <form method="post" action="/tanggapan/store">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="col-lg-4 col-form-label" for="val-tanggal_kerusakan">Pengaduan  </label>
                            <div class="col-lg-6">
                                <select name="id_pengaduan" id="" class="form-control">
                                    <option value="">-- Pilih Pengaduan --</option>
                                    <!-- Barang -->
                                    @foreach($pengaduan as $pengaduan)
                                        <option value="{{ $pengaduan->id_pengaduan }}">{{ $pengaduan->isi_laporan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Tanggapan</label>
                            <input type="date" name="tgl_tanggapan" class="form-control" placeholder=""></input>

                            @if($errors->has('tgl_tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_tanggapan')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Tanggapan</label>
                            <input type="text" name="tanggapan" class="form-control"></input>

                             @if($errors->has('tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggapan')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" name="nik" class="form-control"></input>

                             @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <a href="/tanggapan" class="btn btn-primary">Kembali</a>
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
@endsection

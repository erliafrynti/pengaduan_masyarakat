@extends('template')
@section('content')
<div class="content">
    <div class="container">
        <div class="card mt-3">
            <div class="card-header text-center">
                <br>
                <strong><h2>Layanan Aspirasi dan Pengaduan Online Masyarakat </h2></strong>
                <!-- <h3><b>Sampaikan Laporan Anda </b></p></h3> -->
            </div>
            <div class="card-body">
                <form method="post" action="/pengaduan/store" enctype="multipart/form-data">

                <div class="form-group">
                <textarea class="form-control" name="isi_laporan" placeholder="Ketik Isi Laporan Anda" rows="5"></textarea>
                         @if($errors->has('isi_laporan'))
                            <div class="text-danger">
                                {{ $errors->first('isi_laporan')}}
                            </div>
                        @endif
                    </div>

                    {{ csrf_field() }}
                    <div class="form-group date">
                        <input type="date" name="tgl_pengaduan" required class="form-control input-doi" placeholder="Pilih Tanggal Kejadian"></input>
                        <span class="input-group-addon"></span>
                        @if($errors->has('tgl_pengaduan'))
                            <div class="text-danger">
                                {{ $errors->first('tgl_pengaduan')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="file" name="foto" class="form-control" id="inputGroupFile" placeholder=""></input>
                         @if($errors->has('foto'))
                            <div class="text-danger">
                                {{ $errors->first('foto')}}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menyimpan item ini ?')" >Lapor</button>
                        <a href="/laporan" class="btn btn-primary">Lihat Laporan Anda</a>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
@endsection

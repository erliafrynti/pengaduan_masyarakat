<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Pengaduan Masyarakat</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-body">
                    <br/>
                    <br/>
                    <form method="post" action="/pengaduan/update/{{ $pengaduan->id_pengaduan }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <input type="date" name="tgl_pengaduan" class="form-control"value="{{ $pengaduan->tgl_pengaduan }}">

                            @if($errors->has('tgl_pengaduan'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_pengaduan')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="number" name="nik" class="form-control" placeholder="" value="{{ $pengaduan->nik }}">

                            @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <textarea name="isi_laporan" class="form-control" placeholder="">{{ $pengaduan->isi_laporan }}</textarea>

                             @if($errors->has('isi_laporan'))
                                <div class="text-danger">
                                    {{ $errors->first('isi_laporan')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                        <input type="file" name="foto" class="form-control" placeholder=""></input>
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
    </body>
</html>

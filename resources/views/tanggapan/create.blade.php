<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tanggapan Masyarakat</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>TAMBAH TANGGAPAN</strong>
                </div>
                <div class="card-body">
                    <a href="/tanggapan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>

                    <form method="post" action="/tanggapan/store">

                        {{ csrf_field() }}


                        <div class="form-group row">
                            <label class="control-label col-sm-2">Pengaduan</label>
                            <div class="col-sm-10">
                                <select class="col-sm-12 form-control" name="id_pengaduan"
                                    id="pengaduan-dropdown">
                                    <option value="0" aria-readonly="true"
                                        >-- Select Pengaduan --
                                    </option>
                                    @foreach ($pengaduan as $key => $val)

                                        <option value="<?= $val['id_pengaduan'] ?>">
                                            {{ $val['isi_laporan'] }}</option>
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
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>

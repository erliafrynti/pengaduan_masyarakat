<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>TANGGAPAN</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data Tanggapan
                </div>
                <div class="card-body">
                    <a href="/tanggapan/create" class="btn btn-primary">Input Tanggapan Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Pengaduan</th>
                                <th>Tanggal Tanggapan</th>
                                <th>Tanggapan</th>
                                <th>NIK</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tanggapan as $p)
                            <tr>
                                <td>{{ $p->pengaduan }}</td>
                                <td>{{ $p->tgl_tanggapan }}</td>
                                <td>{{ $p->tanggapan }}</td>
                                <td>{{ $p->nik }}</td>
                                <td>
                                    <a href="/tanggapan/edit/{{ $p->id_tanggapan }}" class="btn btn-warning">Edit</a>
                                    <a href="/tanggapan/delete/{{ $p->id_tanggapan }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>petugas</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data petugas
                </div>
                <div class="card-body">
                    <a href="/petugas/create" class="btn btn-primary">Input petugas Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>id_petugas</th>
                                <th>nama_petugas</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Telp</th>
                                <th>Level</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($petugas as $p)
                            <tr>
                                <td>{{ $p->id_petugas }}</td>
                                <td>{{ $p->nama_petugas }}</td>
                                <td>{{ $p->username }}</td>
                                <td>{{ $p->password }}</td>
                                <td>{{ $p->Telp }}</td>
                                <td>{{ $p->Level }}</td>
                                <td>
                                    <a href="/petugas/edit/{{ $p->id_petugas }}" class="btn btn-warning">Edit</a>
                                    <a href="/petugas/delete/{{ $p->id_petugas }}" class="btn btn-danger">Hapus</a>
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

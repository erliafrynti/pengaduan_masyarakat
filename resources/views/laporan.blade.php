@extends('template')
@section('content')
<div class="content">
    <div class="container">
        <div class="card md-12">
            <br>
            <div class="card-header text-center ">
                <h3>DATA LAPORAN PENGADUAN</h3>
            </div>
            <div class="card-body md md-12">
                <!-- <a href="/pengaduan/create" class="btn btn-primary">LIHAT TANGGAPAN</a> -->
                <br/>
                <br/>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Laporan</th>
                            <th>Tanggal Kejadian</th>
                            <th>Nik</th>
                            <th>Foto</th>
                            <th>Status</th>
                            <th>OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pengaduan as $p)
                        <tr>
                            <td>{{ $p->isi_laporan }}</td>
                            <td>{{ $p->tgl_pengaduan }}</td>
                            <td>{{ $p->nik }}</td>
                            <td>
                                <img src="{{ asset('img/'. $p->foto) }}" height="50%" width="50%">
                            </td>
                            <td>{{ $p->status }}</td>
                            <td>
                                <a href="/pengaduan/show{{ $p->id_pengaduan}}" class="btn btn-primary"><svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <title>document</title> <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Rounded-Icons" transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero"> <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)"> <g id="document" transform="translate(154.000000, 300.000000)"> <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" id="Path" opacity="0.603585379"></path> <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z" id="Shape"></path> </g> </g> </g> </g> </svg>
                                <!-- <a href="/pengaduantanggapan/{{ $p->id_pengaduan }}" class="btn btn-warning"><span class="ni ni-pen-to-square"></span></a>
                                <a href="/pengaduan/delete/{{ $p->id_pengaduan }}" class="btn btn-danger"> <span class="ni ni-basket"></span></a> -->
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @include('sweetalert::alert')
    </div>
</div>
@endsection

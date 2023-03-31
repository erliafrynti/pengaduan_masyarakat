@extends('template')
@section('content')
<div class="container">
        <h4 class="page-title">@section ('title','Detail Data Pengaduan ')</h4>
             
            <div class="card mt-5">
                <div class="card-body">
                    <br>
                    <div class="card-header text-center">
                         <br>
                        <strong><h3>DETAIL LAPORAN MASYARAKAT</h3></strong>
                    </div>
                    <br>
                        <div class="form-group">
                        <strong>Tanggal Pengaduan:</strong>
                        {{ $pengaduan->tgl_pengaduan }}
                        </div>

                        <br>

                        <div class="form-group">
                        <strong>Nik:</strong>
                        {{ $pengaduan->nik }}
                        </div>

                        <br>

                        <div class="form-group">
                        <strong>Isi Laporan:</strong>
                        {{ $pengaduan->isi_laporan }}
                        </div>

                        <br>

                        <div class="form-group">
                        <td>
                        <img src="{{ asset('img/'. $pengaduan->foto) }}" height="70%" width="45%">
                        </td>
                        </div>

                        <br>
                        
                        <div class="form-group">
                        <strong>Tanggapan:</strong>
                        {{ $tanggapan->tanggapan ?? '-'}}
                        </div>

                        <br>

                        <div class="form-group">
                        <strong>Tanggal Tanggapan:</strong>
                        {{ $tanggapan->tgl_tanggapan ?? '-'}}
                        </div>

                         <br>

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
                @if (auth()->user()->level != 'user')
            <a href="/pengaduan" class="btn btn-primary">Kembali</a>
            @elseif (auth()->user()->level == 'user')
            <a href="/laporan" class="btn btn-primary">Kembali</a>
            @endif
            </div>
        </div>
@endsection

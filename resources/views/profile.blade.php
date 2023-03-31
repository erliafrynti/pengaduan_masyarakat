@extends('template')
@section('content')

<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <br>
                    <h4 class="page-title"><strong>Profile</strong></h4>
                    <br>
                    <div class="row">
                        <div class="col-sm-6 col-md-5 col-lg-6">
                        <div class="form-group">
                            <strong>Nik:</strong>
                            {{ $user->nik }}
                            </div>

                            <div class="form-group">
                            <strong>Nama:</strong>
                            {{ $user->nama }}
                            </div>

                            <div class="form-group">
                            <strong>Email:</strong>
                            {{ $user->email }}
                            </div>

                            <div class="form-group">
                            <strong>No Telepon:</strong>
                            {{ $user->telp }}
                            </div>

                            <div class="form-group">
                            <strong>Jenis Kelamin:</strong>
                            {{ $user->jenkel }}
                            </div>

                            <div class="form-group">
                            <strong>Level:</strong>
                            {{ $user->level }}
                            </div>

                            <div class="form-group">
                            <strong>Alamat:</strong>
                            {{ $user->alamat }}
                            </div>
                        </form>

                        </div>
                        <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                            <div class="form-group">
                            <strong>Rt:</strong>
                            {{ $user->rt }}
                            </div>

                            <div class="form-group">
                            <strong>Rw:</strong>
                            {{ $user->rw }}
                            </div>

                            <div class="form-group">
                            <strong>Kode Pos:</strong>
                            {{ $user->kode_pos }}
                            </div>

                            <div class="form-group">
                            <strong>Provinsi:</strong>
                            {{ $user->province->name}}
                            </div>

                            <div class="form-group">
                            <strong>Kabupaten / Kota:</strong>
                            {{ $user->district->name }}
                            </div>

                            <div class="form-group">
                            <strong>Kecamatan:</strong>
                            {{ $user->regency->name }}
                            </div>

                            <div class="form-group">
                            <strong>Kelurahan:</strong>
                            {{ $user->Village->name }}
                            </div>
                            <br>
                        </div>
                        </div>
                            <a href="/pengaduan/create" class="btn btn-primary">Kembali</a>
                            <!-- <a href="/logout" class="btn btn-danger">LogOut</a> -->
                    </div>
@endsection

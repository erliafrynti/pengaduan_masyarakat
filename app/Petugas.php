<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    public $timestamps = false;
    protected $table = 'petugas';
    protected $fillable = ['id_petugas','nama_petugas','username','password','telp','level'];
    protected $primaryKey = 'id_petugas';
}

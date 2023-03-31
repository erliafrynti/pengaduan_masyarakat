<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    protected $table = 'tanggapans';
    public $primaryKey = 'id_tanggapan';
    protected $fillable = ['id_pengaduan','tgl_tanggapan','tanggapan',
    'nik'];

    public function pengaduan ()
    {
        return $this->belongsTo('App\Pengaduan','id_pengaduan');
    }

    public function user ()
    {
        return $this->hasMany('App\User','id');
    }
}

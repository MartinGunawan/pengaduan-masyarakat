<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tanggapan extends Model
{
    protected $timestamp = 'false';
    protected $table = 'tanggapans';
    protected $fillable = ['id_pengaduan','tgl_tanggapan','nik','tanggapan']; 
}

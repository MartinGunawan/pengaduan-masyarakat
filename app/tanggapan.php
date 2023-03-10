<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tanggapan extends Model
{
    protected $timestamp = 'false';
    protected $table = 'pengaduans';
    protected $fillable = ['id_pengaduan','tgl_pengaduan','nik']; 
}

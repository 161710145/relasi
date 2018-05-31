<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class absen extends Model
{
    protected $fillable = ['tanggal_absen','siswa_id','keterangan'];
    protected $timesTamp = true;

}

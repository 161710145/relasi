<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $fillable = ['nis','nama','jenis_klamin'.'kelas_id'];
    protected $timesTamp = true;


    public function absen (){
        return $this->hasMany('App/absen','absen_id');
}
}

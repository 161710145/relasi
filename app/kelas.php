<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $fillable = ['kelas'];
    protected $timesTamp = true;

    public function siswa (){
        return $this->hasMany('App/siswa','siswa_id');
}

}
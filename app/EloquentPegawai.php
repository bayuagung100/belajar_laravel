<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EloquentPegawai extends Model
{
    //menghandle table eloquent_pegawai
    protected $table = "eloquent_pegawai";

    //memfilter column mana saja yang diperbolehkan
    protected $fillable = ['nama','alamat'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Anggota;

class Hadiah extends Model
{
    //
    protected $table = "hadiah";

    public function anggota(){
        return $this->belongsToMany(Anggota::class);
    }
}

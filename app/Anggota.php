<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Hadiah;

class Anggota extends Model
{
    //
    protected $table = "anggota";

    public function hadiah(){
        return $this->belongsToMany(Hadiah::class);
    }
}

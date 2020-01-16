<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Pengguna;

class Telepon extends Model
{
    //
    protected $table = "telepon";

    public function pengguna()
    {
        //tidak perlu use modelnya di awal
        // return $this->belongsTo('App\Telepon');
        
        //perlu use modelnya di awal
        return $this->belongsTo(Pengguna::class);
    }
}

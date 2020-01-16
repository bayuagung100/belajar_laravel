<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Telepon;

class Pengguna extends Model
{
    //
    protected $table = "pengguna";

    public function telepon()
    {
        //tidak perlu use modelnya di awal
        // return $this->hasOne('App\Telepon');
        
        //perlu use modelnya di awal
        return $this->hasOne(Telepon::class);
    }
 
}

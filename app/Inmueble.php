<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    public function inmuebleCobros(){
      return $this->hasMany(InmuebleCobro::class);
    }

}

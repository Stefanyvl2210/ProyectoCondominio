<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InmuebleCobro extends Model
{
    public function inmueble(){
      return $this->belongsTo(Inmueble::class);
    }
}

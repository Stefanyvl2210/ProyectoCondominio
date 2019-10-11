<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProveedorPago extends Model
{
    public function proveedor(){
      return $this->belongsTo(Proveedor::class);
    }
}

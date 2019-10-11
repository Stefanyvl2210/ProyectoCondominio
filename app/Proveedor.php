<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
  public function proveedorPagos(){
    return $this->hasMany(ProveedorPago::class);
  }
}

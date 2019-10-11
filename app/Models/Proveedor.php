<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
  public function proveedorPagos(){
    return $this->hasMany(ProveedorPago::class);
  }
}

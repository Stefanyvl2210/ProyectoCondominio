<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cobro extends Model
{
    protected $fillable = [
        'inmueble_id',
        'mes',
        'descripcion',
        'monto',
        'mora'
    ];

    public function inmueble()
    {
        return $this->belongsTo(Inmueble::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    protected $fillable = [
        'tipo',
        'alicuota'
    ];


    public function cobros()
    {
        return $this->hasMany(Cobro::class);
    }

}

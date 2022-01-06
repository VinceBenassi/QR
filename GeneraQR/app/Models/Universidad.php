<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Universidad extends Model {
    protected $table = 'universidad';

    protected $fillable = [
        'ambi_codigo',
        'tamb_codigo',
        'ambi_campus',
        'ambi_edificio',
        'ambi_nombre',
        'ambi_descripcion',
        'ambi_capacidad',
        'ambi_vigente',
        'ambi_latitud',
        'ambi_longitud',
        'camp_codigo',
        'edif_codigo',
        'sala_codigo',
        'usuario_mod',
        'fecha_mod'
    ];
}

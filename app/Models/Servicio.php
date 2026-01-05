<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $fillable = [
        'nombre',
        'precio',
        'categoria_id',
        'unidad_medida_id',
        'activo',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function unidadMedida()
    {
        return $this->belongsTo(UnidadMedida::class);
    }
}

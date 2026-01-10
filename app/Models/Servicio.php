<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = 'servicios';

    protected $fillable = [
        'codigo',
        'nombre',
        'descripcion',

        'tipo_de_item_code',
        'codigo_de_tipo_de_servicio_medico_code',

        'duracion_estimada',
        'requiere_profesional',

        'precio_base',
        'precio_minimo',
        'precio_maximo',

        'gravado',
        'exento',
        'porcentaje_iva',

        'observaciones',

        'status',
        'active',
    ];
    
    public function tipoDeItem()
    {
        return $this->belongsTo(TipoDeItem::class, 'tipo_de_item_code', 'code');
    }

    public function tipoServicioMedico()
    {
        return $this->belongsTo(
            CodigoDeTipoDeServicioMedico::class,
            'codigo_de_tipo_de_servicio_medico_code',
            'code'
        );
    }
}

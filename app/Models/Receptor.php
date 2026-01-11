<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TipoDePersona;
use App\Models\TipoDocumentoIdentificacionR;
use App\Models\Municipio;

class Receptor extends Model
{
    protected $table = 'receptor';

    protected $fillable = [
        'nombre',
        'tipo_de_persona_code',
        'tipo_de_documento_code',
        'documento',
        'nrc',
        'actividad_economica',
        'descripcion_actividad_economica',
        'municipio_code',
        'direccion',
        'telefono',
        'correo',
        'status',
        'active',
    ];

    public function tipoDePersona()
    {
        return $this->belongsTo(
            TipoDePersona::class,
            'tipo_de_persona_code',
            'code'
        );
    }

    public function tipoDeDocumento()
    {
        return $this->belongsTo(
            TipoDocumentoIdentificacionR::class,
            'tipo_de_documento_code',
            'code'
        );
    }

    public function municipio()
    {
        return $this->belongsTo(
            Municipio::class,
            'municipio_code',
            'code'
        );
    }
}

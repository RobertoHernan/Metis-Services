<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamento';

    protected $primaryKey = 'code';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'code',
        'name',
        'pais_code',
        'status',
        'active',
    ];

    public function municipios()
    {
        return $this->hasMany(
            Municipio::class,
            'departamento_code',
            'code'
        );
    }

    public function pais()
    {
        return $this->belongsTo(
            Pais::class,
            'pais_code',
            'code'
        );
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipio';

    protected $primaryKey = 'code';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'code',
        'name',
        'departamento_code',
        'status',
        'active',
    ];

    public function departamento()
    {
        return $this->belongsTo(
            Departamento::class,
            'departamento_code', 
            'code'               
        );
    }
}

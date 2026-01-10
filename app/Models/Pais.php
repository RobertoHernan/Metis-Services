<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'pais';

    protected $primaryKey = 'code';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'code',
        'name',
        'status',
        'active',
    ];

    public function departamentos()
    {
        return $this->hasMany(
            Departamento::class,
            'pais_code',
            'code'
        );
    }
}

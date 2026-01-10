<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoDeItem extends Model
{
    protected $table = 'tipo_de_item';

    protected $primaryKey = 'code';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'code',
        'name',
        'status',
        'active',
    ];
}

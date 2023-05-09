<?php

namespace Modules\Hermes\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tipo_tramite extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\Hermes\Database\factories\TipoTramiteFactory::new();
    }
}

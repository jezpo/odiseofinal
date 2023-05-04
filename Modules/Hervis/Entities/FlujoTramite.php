<?php

namespace Modules\Hervis\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Flujo_tramite extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\Hervis\Database\factories\FlujoTramiteFactory::new();
    }
}

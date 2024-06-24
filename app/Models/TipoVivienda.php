<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoVivienda extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_vivienda_name'
    ];

    public function forms(){
        return $this->hasMany(FormularioCenso::class);
    }
}

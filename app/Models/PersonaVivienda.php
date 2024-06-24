<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonaVivienda extends Model
{
    use HasFactory;
    protected $fillable = [
        'cantidad_personas_vivienda'
    ];

    public function forms(){
        return $this->hasMany(FormularioCenso::class);
    }
}

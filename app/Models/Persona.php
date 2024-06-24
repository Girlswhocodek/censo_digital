<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'rol',
        'sexo',
        'edad',
        'formulario_censo_id',
    ];

    public function form(){
        return $this->belongsTo(FormularioCenso::class);
    }
}

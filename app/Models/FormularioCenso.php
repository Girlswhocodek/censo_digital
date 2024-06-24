<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormularioCenso extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo_vivienda_id',
        'persona_vivienda_id',
    ];
 
    public function tipoVivienda(){
        return $this->belongsTo(TipoVivienda::class);
    }
    public function personaVivienda(){
        return $this->belongsTo(PersonaVivienda::class);
    }
    public function personas(){
        return $this->hasMany(Persona::class);
    }

    public function user(){
        return $this->hasOne(User::class, 'formulario_censo_id');
    }
}

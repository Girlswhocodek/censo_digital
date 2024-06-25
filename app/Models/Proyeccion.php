<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyeccion extends Model
{
    use HasFactory;
    protected $fillable = [
        'costo',
        'habitantes',
        'extranjeros',
        'habitantes_santa_cruz',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asignaturas extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'creditos',
        'area',
        'tipo',
    ];
}

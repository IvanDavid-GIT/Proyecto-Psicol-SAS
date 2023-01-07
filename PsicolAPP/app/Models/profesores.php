<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profesores extends Model
{
    use HasFactory;
    protected $fillable = [
        'documento',
        'nombres',
        'telefono',
        'email',
        'direccion',
        'ciudad'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Especificar la tabla que representa este modelo
    protected $table = 'contact';

    // Atributos que se pueden asignar en masa
    protected $fillable = ['nombre', 'email', 'mensaje', 'publicidad'];
}

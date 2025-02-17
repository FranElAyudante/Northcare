<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;

    protected $table = 'contact_forms'; // Nombre de la tabla en la BD

    protected $fillable = [
        'tipo_empresa',
        'urgencia',
        'servicio',
        'empresa',
        'nombre',
        'email',
        'telefono',
        'provincia',
        'localidad',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = ['nombre', 'apellido', 'sexo', 'fecha_nacimiento', 'tipo_documento', 'num_documento', 'direccion', 'telefono', 'email'];


    








}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Muni extends Model
{
    protected $fillable = ['id_Municipalidad ', 'departamento', 'provincia', '	distrito', 'nombre', 'direccion', 'tipo', 'alcalde', 'paginaweb', 'poblacion', 'monto_autorizado'];
}

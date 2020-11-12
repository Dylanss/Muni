<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Muni extends Model
{
    protected $fillable = ['id_Municipalidad ', 'nombre', 'ubigeo'];
}

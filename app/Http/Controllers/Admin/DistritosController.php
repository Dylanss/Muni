<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistritosController extends Controller
{
    public function load(){
        $municipalidades = Muni::all();
        
    }
}

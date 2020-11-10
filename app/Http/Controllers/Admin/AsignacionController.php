<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AsignacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function asignacion()
    {
        return view('admin.admin.asignacion');
    }
}

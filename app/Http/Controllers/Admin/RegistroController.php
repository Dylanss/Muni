<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function registro()
    {
        return view('admin.admin.registro');
    }
}

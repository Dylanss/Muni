<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $country_list = DB::table('municipalidades')
                            ->groupBy('Departamento')
                            ->get();
        return view('admin.admin.index')->with('country_list', $country_list);
    }

    function fetch(Request $request)
    {
     $select = $request->get('select');
     $value = $request->get('value');   
     $dependent = $request->get('dependent');
     $data = DB::table('municipalidades')
       ->where($select, $value)
       ->groupBy($dependent)
       ->get();
     $output = '<option value="">Seleccionar '.ucfirst($dependent).'</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
     }
     echo $output;
    }
}


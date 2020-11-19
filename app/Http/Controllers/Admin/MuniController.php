<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Muni;

class MuniController extends Controller
{

  /*   public function __construct()
    {
        $this->middleware('auth');
    } */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipalidades = Muni::paginate(10);


       return $municipalidades;
    }


    function fetch(Request $request)
    {
     $select = $request->get('select');
     $value = $request->get('value');   
     $dependent = $request->get('dependent');
     $data = DB::table('munis')
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id) 
    {
        $municipalidades = Muni::find($id);
       return $municipalidades;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mu = Muni::find($id);

        $mu->nombre = $request->nombre;
        $mu->direccion = $request->direccion;
        $mu->tipo = $request->tipo;
        $mu->alcalde = $request->alcalde;
        $mu->paginaweb = $request->paginaweb;
        $mu->poblacion = $request->poblacion;
        $mu->monto_autorizado = $request->monto_autorizado;


        $mu->save(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

@extends('adminlte::page')

@section('title','Admin - Categorias')

@section('css')
   <link rel="stylesheet" href="/css/admin_custom.css"> 
@stop

@section('content_header')
<h1>
    Registros Historicos
    <button type="button" class="btn btn-primary" data-toggle="" data-target="#modal-create-category">
        Registrar
    </button>
</h1>
@stop

@section('content')
@yield('body')

<registro-component></registro-component>

{{-- 
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Registro</h3>
                </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="categories" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>FECHA DE CREACION</th>
                            <th>NOMBRE</th>
                            <th>APELLIDO</th>
                            <th>SUMATORIA SIN PONDERAR</th>
                            <th>SUMATORIA PONDERADA</th>
                            <th>INDICE E-GOBIERNO</th>
                            <th>MUNICIPALIDAD EVALUADA</th>
                            <th>Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>30/10/20</td>
                            <td>Maria </td>
                            <td>Torres</td>
                            <td>12</td>
                            <td>5.5</td>
                            <td>0.21</td>
                            <td>MUNICIPALIDAD DE CHACHAPOYAS</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="" data-target="#modal-create-category">Ver</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>28/10/2020</td>
                            <td>Jorge </td>
                            <td>Perez</td>
                            <td>14</td>
                            <td>4.5</td>
                            <td>0.19</td>
                            <td>MUNICIPALIDAD DE LIMA</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="" data-target="#modal-create-category">Ver</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>30/10/2020</td>
                            <td>Juana </td>
                            <td>Ugarte</td>
                            <td>12</td>
                            <td>8</td>
                            <td>0.30</td>
                            <td>MUNICIPALIDAD DE SAN JUAN DE MIRAFLORES</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="" data-target="#modal-create-category">Ver</button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>30/10/2020</td>
                            <td>Mario </td>
                            <td>Gonzales</td>
                            <td>16</td>
                            <td>7.8</td>
                            <td>0.29</td>
                            <td>MUNICIPALIDAD DE LOS OLIVOS</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="" data-target="#modal-create-category">Ver</button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>28/10/2020</td>
                            <td>Santiago </td>
                            <td>Mamani</td>
                            <td>15</td>
                            <td>6.8</td>
                            <td>0.25</td>
                            <td>MUNICIPALIDAD DE LOS OLIVOS</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="" data-target="#modal-create-category">Ver</button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>28/10/2020</td>
                            <td>Jose </td>
                            <td>Asencio</td>
                            <td>15</td>
                            <td>6.8</td>
                            <td>0.25</td>
                            <td>MUNICIPALIDAD DE CARABAYLLO</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="" data-target="#modal-create-category">Ver</button>
                            </td>
                        </tr>
                        <tr>
                           <td>7</td>
                            <td>29/10/2020</td>
                            <td>Diego </td>
                            <td>Garcia</td>
                            <td>20</td>
                            <td>11</td>
                            <td>0.42</td>
                            <td>MUNICIPALIDAD DE SURCO</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="" data-target="#modal-create-category">Ver</button>
                            </td>
                        </tr>
                        <tr>
                          <td>8</td>
                            <td>28/10/2020</td>
                            <td>Moises </td>
                            <td>Quispe</td>
                            <td>14</td>
                            <td>6.6</td>
                            <td>0.25</td>
                            <td>MUNICIPALIDAD DE BREÑA</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="" data-target="#modal-create-category">Ver</button>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>29/10/2020</td>
                            <td>Rosa</td>
                            <td>Paredes</td>
                            <td>16</td>
                            <td>8</td>
                            <td>0.30</td>
                            <td>MUNICIPALIDAD DE SURQUILLO</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="" data-target="#modal-create-category">Ver</button>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>30/10/2020</td>
                            <td>Jesus</td>
                            <td>Flores</td>
                            <td>16</td>
                            <td>8</td>
                            <td>0.30</td>
                            <td>MUNICIPALIDAD DE SAN MARTIN DE PORRES</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="" data-target="#modal-create-category">Ver</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>

<!-- modal -->

<div class="modal fade" id="modal-create-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="col-md-12">
        <div class="modal-content">
            
            <div class="modal-header" style="background:#605ca8;color:white">
                <h4 class="modal-title">Municipalidades</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <form action="/admin/categories/store" method="POST">
            <div class="modal-body">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <center>
                        <h3 class="modal-title" id="exampleModalLongTitle" style="font-weight:bolder; text-transform:uppercase; font-family: 'Times New Roman', Times, serif; color:red"> Actualizar</h3>
                        </center>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="" enctype="multipart/form-data">
                            
                            <center>
                            <div class="form-group">
                                <div class="col-md-3">     
                            </div>
                            <div class="col-md-3">
                             </div>
                                <div class="col-md-3">               
                            </div>
                               
                                <div class="col-md-4">
                                    <select class="form-control js-country" name="country_id">
                                        <option value="-1" selected disabled>Seleccionar Departamento</option>
                                        
                                            <option value=""></option>
                                        
                                    </select>
                            </div>
                            <br>
                                <div class="col-md-4">
                                    <select class="form-control js-states" name="state_id">
                                        <option value="-1" selected disabled>Seleccionar Provincia</option>
    
                                    </select>
                            </div>
                            <br>
                                <div class="col-md-4">
                                    <select class="form-control js-cities" name="city_id" >
                                        <option value="-1" selected disabled>Seleccionar Distrito</option>
                                    </select>
                            </div>
                            <br>
                            <div class="col-md-4">
                                <select class="form-control" name="department_id">
                                    <option selected disabled>Selecionar Municipalidad</option>
                                    
                                        <option value=""></option>
                                    
                                </select>
                                 
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                
                            </div>
                            <br>
                                <div class="col-md-4">
                                    <input id="zip" type="text" class="form-control" name="zip" value="{{ old('zip') }}" required placeholder="Alcalde">
    
                                    
                                        <span class="help-block">
                                            <strong></strong>
                                        </span>
                                    
                            </div>
                            <br>
                            {{-- <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                                <label for="zip" class="col-md-4 control-label">Age</label>
    
                                <div class="col-md-6">
                                    <input id="age" type="text" class="form-control" name="age" value="{{ old('age') }}" required>
    
                                    @if ($errors->has('age'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('age') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div> 

                                <div class="col-md-4">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            
                                        </div>
                                        <input type="text" value="{{ old('birthdate') }}" name="birthdate" class="form-control" id="birthDate" required placeholder="Direccion" >
                                    </div>
                            </div>
                            <br>
                                <div class="col-md-4">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            
                                        </div>
                                        <input type="text" value="{{ old('date_join') }}" name="date_join" class="form-control pull-right" id="hiredDate" required placeholder="Pagina Web">
                                    </div>
                                </div>
                                <br>
                                <div class="col-md-4">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            
                                        </div>
                                        <input type="text" value="{{ old('date_join') }}" name="date_join" class="form-control pull-right" id="hiredDate" required placeholder="Poblacion">
                                    </div>
                                </div>
                                <br>
                                <div class="col-md-4">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            
                                        </div>
                                        <input type="text" value="{{ old('date_join') }}" name="date_join" class="form-control pull-right" id="hiredDate" required placeholder="Presupuesto">
                                    </div>
                                </div>
                            <br>

                            </center>
                                <!--
                                <div class="col-md-4">
                                    <select class="form-control" name="division_id">
                                        <option selected disabled>Select Division</option>
                                       
                                            <option value=""></option>
                                        
                                    </select>
                                    
                                        <span class="help-block">
                                            <strong></strong>
                                        </span>
                                    
                                </div>
                               -->
                                    <center>
                                    <div class="col-md-6">
                                     <textarea id="address" type="text" class="form-control" name="address" value="" placeholder="Descripcion"></textarea>
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                </center>
                        </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-outline-primary">Guardar</button>
                    </div>
                </div>
               
            </div>
             </form>
        </div> 
    </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- /.modal -->
--}}
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('#categories').DataTable( {
            "order": [[ 0, "asc" ]]
        } );
    } );
</script>
@stop
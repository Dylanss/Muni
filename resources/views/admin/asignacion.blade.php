@extends('adminlte::page')

@section('title','Admin - Categorias')

@section('css')
   <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop

@section('content_header')
<h1>
    Asignaciones
    <button type="button" class="btn btn-primary" data-toggle="" data-target="#modal-create-category">
        Registrar
    </button>
</h1>
@stop


@section('content')
@yield('body')

<asignacion-component></asignacion-component>
{{-- 
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Asignacion de Municipalidades</h3>
                </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="categories" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>DNI</th>
                            <th>Municipalidad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Maria </td>
                            <td>Torres</td>
                            <td>98765432</td>
                            <td>Lima</td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="" data-target="#modal-create-category">Asignacion</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jorge </td>
                            <td>Perez</td>
                            <td>7536984</td>
                            <td>Ancon</td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="" data-target="#modal-create-category">Asignacion</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Juana </td>
                            <td>Ugarte</td>
                            <td>5196326</td>
                            <td>ATE</td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="" data-target="#modal-create-category">Asignacion</button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Mario </td>
                            <td>Gonzales</td>
                            <td>7548963</td>
                            <td>Barranca</td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="" data-target="#modal-create-category">Asignacion</button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Santiago</td>
                            <td>Mamani</td>
                            <td>8546932</td>
                            <td>Supe</td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="" data-target="#modal-create-category">Asignacion</button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Jose </td>
                            <td>Asencio</td>
                            <td>7854694</td>
                            <td>Canta</td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="" data-target="#modal-create-category">Asignacion</button>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Diego </td>
                            <td>Garcia</td>
                            <td>7563245</td>
                            <td>Chilca</td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="" data-target="#modal-create-category">Asignacion</button>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Moises </td>
                            <td>Quispe</td>
                            <td>8659743</td>
                            <td>Imperial</td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="" data-target="#modal-create-category">Asignacion</button>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Rosa </td>
                            <td>Paredes</td>
                            <td>6667589</td>
                            <td>Paramong</td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="" data-target="#modal-create-category">Asignacion</button>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Jesus </td>
                            <td>Flores</td>
                            <td>9863258</td>
                            <td>San Vicente de Cañete</td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="" data-target="#modal-create-category">Asignacion</button>
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
                             <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
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
                                    <select class="form-control" name="department_id">
                                        <option selected disabled>Selecionar Evaluador</option>
                                        
                                            <option value=""></option>
                                        
                                    </select>
                                     
                                        <span class="help-block">
                                            <strong></strong>
                                        </span>
                                    
                                </div>
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
--}}
<!-- /.modal -->

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
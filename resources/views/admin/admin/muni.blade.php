@extends('adminlte::page')

@section('title','Admin - Categorias')

@section('css')
   
@stop

@section('content_header')
<h1>
    Municipalidades
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-category">
        Registrar
    </button>
</h1>
@stop


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de Municipalidades</h3>
                </div>
            <!-- /.card-header -->
            <div class="card-body">            
                    <div class="form-group col-md-4 float-left" >
                        <label for="Departamento">Departamento</label>
                        <select name="Departamento" id="Departamento" class="form-control input-lg dynamic" data-dependent="Provincia">
                            <option value="">Selecionar Departamento </option>
                            @foreach($country_list as $Departamento)
                            <option value="{{ $Departamento->Departamento}}">{{ $Departamento->Departamento }}</option>
                            @endforeach
                           </select>
                    </div>
                
                <div class="form-group col-md-4 float-left">
                    <label for="Provincia">Provincia</label>
                    <select name="Provincia" id="Provincia" class="form-control input-lg dynamic" data-dependent="Distrito">
                        <option value="">Selecionar Provincia</option>
                       </select>
                </div>
                
                <div class="form-group col-md-4 float-left">
                    <label for="Distrito">Distrito</label>
                    <select name="Distrito" id="Distrito" class="form-control input-lg">
                        <option value="">Selecionar Distrito</option>
                       </select>
                </div>
                {{ csrf_field() }}
            </div>  
   
                <table id="categories" class="table table-bordered table-striped">
                    
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Municipalidad</th>
                            <th>Direccion</th>
                            <th>Tipo</th>
                            <th>Alcalde</th>
                            <th>PaginaWeb</th>
                            <th>Poblacion</th>
                            <th>Presupuesto</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                         <!--
                        <tr>
                            <td>1</td>
                            <td>Lima</td>
                            <td>Jr. de la Unión N° 300</td>
                            <td>PROVINCIAL</td>
                            <td>Muñoz Wells Jorge</td>
                            <td>WWW.MUNLIMA.GOB.PE</td>
                            <td>10.000</td>
                            <td>S/.20.000</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-create-category">Editar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ancon</td>
                            <td>Malecón Ferreyros N° 376</td>
                            <td>DISTRITAL</td>
                            <td>Barrera Bernui John</td>
                            <td>WWW.MUNIANCON.GOB.PE</td>
                            <td>10.000</td>
                            <td>S/.20.000</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-create-category">Editar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>ATE</td>
                            <td>Av. Nicolás Ayllón N° 5818</td>
                            <td>DISTRITAL</td>
                            <td>Cuellar Alegría Edde</td>
                            <td>WWW.MUNIATE.GOB.PE</td>
                            <td>10.000</td>
                            <td>S/.20.000</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-create-category">Editar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Barranca</td>
                            <td>Jr. Zavala N° 500</td>
                            <td>PROVINCIAL</td>
                            <td>Zender Sanchez Ricardo</td>
                            <td>WWW.MUNIVES.GOB.PE</td>
                            <td>10.000</td>
                            <td>S/.20.000</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-create-category">Editar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Paramonga</td>
                            <td>Av. Almirante Miguel Grau S/N</td>
                            <td>DISTRITAL</td>
                            <td>García Pagador Eduardo</td>
                            <td>WWW.MUNIPARAMONGA.GOB.PE</td>
                            <td>10.000</td>
                            <td>S/.20.000</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-create-category">Editar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Supe</td>
                            <td>Jr. San Martín N° 446</td>
                            <td>DISTRITAL</td>
                            <td>Nishijima Julián</td>
                            <td>WWW.MUNISUPE.GOB.PE</td>
                            <td>10.000</td>
                            <td>S/.20.000</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-create-category">Editar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Canta</td>
                            <td>Jr. Independencia N° 308</td>
                            <td>PROVINCIAL</td>
                            <td>Paredes Salcedo Arturo</td>
                            <td>WWW.MUNICANTA.GOB.PE</td>
                            <td>10.000</td>
                            <td>S/.20.000</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-create-category">Editar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Chilca</td>
                            <td>Av. Mariano Ignacio Prado N° 496</td>
                            <td>DISTRITAL</td>
                            <td>Rosas Chauca Navarro Alfredo</td>
                            <td>WWW.MUNICIPALIDADCHILCA.GOB.PE</td>
                            <td>10.000</td>
                            <td>S/.20.000</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-create-category">Editar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Imperial</td>
                            <td>Jr. 28 de Julio N° 335</td>
                            <td>DISTRITAL</td>
                            <td>Alcala Rosas Elias</td>
                            <td>WWW.MUNIIMPERIAL.GOB.PE</td>
                            <td>10.000</td>
                            <td>S/.20.000</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-create-category">Editar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>San Vicente de Cañete</td>
                            <td>Jr. Bolognesi N° 250 Km. 144</td>
                            <td>PROVINCIAL</td>
                            <td>Díaz De la Cruz Segundo</td>
                            <td>WWW.MUNICANETE.GOB.PE</td>
                            <td>10.000</td>
                            <td>S/.20.000</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-create-category">Editar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Asia</td>
                            <td>Calle La Mar N° 315</td>
                            <td>DISTRITAL</td>
                            <td>Alcántara Malásquez Jose</td>
                            <td>WWW.MUNIASIA.GOB.PE</td>
                            <td>10.000</td>
                            <td>S/.20.000</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-create-category">Editar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> -->
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
            <div class="card-header" style="background:#4E7BF3;color:white">
                <h4 class="card-title">Municipalidades</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <form role="form" action="/admin/categories/store" method="POST">
                <div class="card-body">
                        <form class="form-horizontal" role="form" method="" action="" enctype="multipart/form-data">
                            
                                <div class="form-group">
                                    <label for="Departamento">Departamento</label>
                                    <select name="Departamento" id="Departamento" class="form-control input-lg dynamic" data-dependent="Provincia">
                                        <option value="">Selecionar Departamento </option>
                                        @foreach($country_list as $Departamento)
                                        <option value="{{ $Departamento->Departamento}}">{{ $Departamento->Departamento }}</option>
                                        @endforeach
                                       </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="Provincia">Provincia</label>
                                <select name="Provincia" id="Provincia" class="form-control input-lg dynamic" data-dependent="Distrito">
                                    <option value="">Selecionar Provincia</option>
                                   </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="Distrito">Distrito</label>
                                <select name="Distrito" id="Distrito" class="form-control input-lg">
                                    <option value="">Selecionar Distrito</option>
                                   </select>
                            </div>
                            {{ csrf_field() }}
                            
                            <div class="form-group">
                                <label for="Municipalidad">Municipalidad</label>
                                <select class="form-control" name="department_id">
                                    <option selected disabled>Selecionar Municipalidad</option>
                                    
                                        <option value=""></option>
                                    
                                </select>
                                 
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                                
                            </div>
                            
                            <div class="form-group">
                                <label for="Municipalidad">Alcalde</label>
                                    <input id="zip" type="text" class="form-control" name="zip" value="" required placeholder="Alcalde">
    
                                    
                                        <span class="help-block">
                                            <strong></strong>
                                        </span>
                                    
                            </div>
                            
                            <div class="form-group">
                                <label for="Direccion">Direccion</label>
                                    <div class="input-group date">
                                        <input type="text" value="" name="birthdate" class="form-control" id="birthDate" required placeholder="Direccion" >
                                    </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="Paginaweb">Pagina Web</label>
                                    <div class="input-group date">
                                        <input type="text" value="" name="date_join" class="form-control pull-right"  required placeholder="Pagina Web">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="Poblacion">Poblacion</label>
                                    <div class="input-group date">
                                        <input type="text" value="" name="date_join" class="form-control pull-right"  required placeholder="Poblacion">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="Municipalidad">Presupuesto</label>
                                    <div class="input-group date"> 
                                        <input type="text" value="" name="date_join" class="form-control pull-right"  required placeholder="Presupuesto">
                                    </div>
                                </div>
                        </div>
                        
                    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary float-right">Guardar</button
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

@endsection

@section('js')
<script>
$(document).ready(function() {
    $('#categories').DataTable( {
        "order": [[ 0, "asc" ]]
    } );
} );
</script>
<script>
    $(document).ready(function(){
    
     $('.dynamic').change(function(){
      if($(this).val() != '')
      {
       var select = $(this).attr("id");
       var value = $(this).val();
       var dependent = $(this).data('dependent');
       var _token = $('input[name="_token"]').val();
       $.ajax({
        url:"{{ route('dynamicdependent.fetch') }}",
        method:"GET",
        data:{select:select, value:value, _token:_token, dependent:dependent},
        success:function(result)
        {
         $('#'+dependent).html(result);
        }
    
       })
      }
     });
    
     $('#Departamento').change(function(){
      $('#Provincia').val('');
      $('#Distrito').val('');
     });
    
     $('#Provincia').change(function(){
      $('#Distrito').val('');
     });
     
    
    });
    </script>
@stop
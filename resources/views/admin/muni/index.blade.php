@extends('adminlte::page')

@section('title','Admin - Categorias')

@section('css')
@stop

@section('content_header')
<h1>
    Municipalidades
</h1>
@stop

@section('content')
@yield('body')
 

<index-component></index-component>


{{-- <div class="container-fluid">
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
                        <select name="Departamento" id="departamento" class="form-control input-lg dynamic" data-dependent="provincia">
                            <option value="">Selecionar Departamento </option>
                            @foreach($country_list as $departamento)
                            <option value="{{ $departamento->departamento}}">{{ $departamento->departamento }}</option>
                            @endforeach
                           </select>
                    </div>
                
                <div class="form-group col-md-4 float-left">
                    <label for="Provincia">Provincia</label>
                    <select name="Provincia" id="provincia" class="form-control input-lg dynamic" data-dependent="distrito">
                        <option value="">Selecionar Provincia</option>
                       </select>
                </div>
                
                <div class="form-group col-md-4 float-left">
                    <label for="Distrito">Distrito</label>
                    <select name="Distrito" id="distrito" class="form-control input-lg">
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
                        @foreach($municipalidades as $Municipalidad)
                        <tr>
                            <td>{{ $Municipalidad->id_Municipalidad}}</td>
                            <td>{{ $Municipalidad->nombre}}</td>
                            <td>{{ $Municipalidad->direccion}}</td>
                            <td>{{ $Municipalidad->tipo}}</td>
                            <td>{{ $Municipalidad->alcalde}}</td>
                            <td>{{ $Municipalidad->paginaweb}}</td>
                            <td>{{ $Municipalidad->poblacion}}</td>
                            <td>S/{{ $Municipalidad->monto_autorizado}}</td>
                            <td>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-create-category">Editar</button>
                            </td>
                        </tr>
                          @endforeach
                    </table>

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
                            {{ csrf_field() }}
                            
                            <div class="form-group">
                                <label for="Municipalidad">Municipalidad</label>
                                    <input id="zip" type="text" class="form-control" name="zip" value="" required placeholder="Municipalidad" readonly>
    
                                    
                                        <span class="help-block">
                                            <strong></strong>
                                        </span>
                                    
                            </div>

                            <div class="form-group">
                                <label for="Municipalidad">Dirección</label>
                                    <input id="zip" type="text" class="form-control" name="zip" value="" required placeholder="Dirección">
    
                                    
                                        <span class="help-block">
                                            <strong></strong>
                                        </span>
                                    
                            </div>

                            <div class="form-group">
                                <label for="Municipalidad">Tipo</label>
                                    <input id="zip" type="text" class="form-control" name="zip" value="" required placeholder="Tipo" readonly>
    
                                    
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
</div> --}}
<!-- /.modal -->

@endsection

@section('js')
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
    
     $('#departamento').change(function(){
      $('#provincia').val('');
      $('#distrito').val('');
     });
    
     $('#provincia').change(function(){
      $('#distrito').val('');
     });
     
    
    });
    </script> 
@stop
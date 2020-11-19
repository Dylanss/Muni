<template>
    <div>
        <div class="content">
                <div class="container-fluid">
                    
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de Municipalidades</h3>
                </div>
            <!-- /.card-header -->
            <div class="card-body">            
                    <div class="form-group col-md-4 float-left">
                        <label for="Departamento">Departamento</label>
                        <select name="Departamento" id="departamento" class="form-control input-lg dynamic" data-dependent="provincia">
                            <option value="">Selecionar Departamento </option>
                                                        <option value="AMAZONAS">AMAZONAS</option>
                                                        <option value="ANCASH">ANCASH</option>
                                                        <option value="APURIMAC">APURIMAC</option>
                                                        <option value="AREQUIPA">AREQUIPA</option>
                                                        <option value="AYACUCHO">AYACUCHO</option>
                                                        <option value="CAJAMARCA">CAJAMARCA</option>
                                                        <option value="CALLAO">CALLAO</option>
                                                        <option value="CUSCO">CUSCO</option>
                                                        <option value="HUANCAVELICA">HUANCAVELICA</option>
                                                        <option value="HUANUCO">HUANUCO</option>
                                                        <option value="ICA">ICA</option>
                                                        <option value="JUNIN">JUNIN</option>
                                                        <option value="LA LIBERTAD">LA LIBERTAD</option>
                                                        <option value="LAMBAYEQUE">LAMBAYEQUE</option>
                                                        <option value="LIMA">LIMA</option>
                                                        <option value="LORETO">LORETO</option>
                                                        <option value="MADRE DE DIOS">MADRE DE DIOS</option>
                                                        <option value="MOQUEGUA">MOQUEGUA</option>
                                                        <option value="PASCO">PASCO</option>
                                                        <option value="PIURA">PIURA</option>
                                                        <option value="PUNO">PUNO</option>
                                                        <option value="SAN MARTIN">SAN MARTIN</option>
                                                        <option value="TACNA">TACNA</option>
                                                        <option value="TUMBES">TUMBES</option>
                                                        <option value="UCAYALI">UCAYALI</option>
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
                <input type="hidden" name="_token" value="YRHezQvqPlfiVOeXjVtgQ5aGQ25GeEPYDEvjJH40">
            </div>  
   
                <div id="categories_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="categories_length"><label>Show <select name="categories_length" aria-controls="categories" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="categories_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="categories"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="categories" class="table table-bordered table-striped dataTable no-footer" role="grid" aria-describedby="categories_info">
                    
                    <thead>
                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="categories" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 15px;">ID</th><th class="sorting" tabindex="0" aria-controls="categories" rowspan="1" colspan="1" aria-label="Municipalidad: activate to sort column ascending" style="width: 117px;">Municipalidad</th><th class="sorting" tabindex="0" aria-controls="categories" rowspan="1" colspan="1" aria-label="Direccion: activate to sort column ascending" style="width: 87px;">Direccion</th><th class="sorting" tabindex="0" aria-controls="categories" rowspan="1" colspan="1" aria-label="Tipo: activate to sort column ascending" style="width: 64px;">Tipo</th><th class="sorting" tabindex="0" aria-controls="categories" rowspan="1" colspan="1" aria-label="Alcalde: activate to sort column ascending" style="width: 101px;">Alcalde</th><th class="sorting" tabindex="0" aria-controls="categories" rowspan="1" colspan="1" aria-label="PaginaWeb: activate to sort column ascending" style="width: 634px;">PaginaWeb</th><th class="sorting" tabindex="0" aria-controls="categories" rowspan="1" colspan="1" aria-label="Poblacion: activate to sort column ascending" style="width: 71px;">Poblacion</th><th class="sorting" tabindex="0" aria-controls="categories" rowspan="1" colspan="1" aria-label="Presupuesto: activate to sort column ascending" style="width: 89px;">Presupuesto</th><th class="sorting" tabindex="0" aria-controls="categories" rowspan="1" colspan="1" aria-label="Acciones: activate to sort column ascending" style="width: 62px;">Acciones</th></tr>
                    </thead>
                    <tbody>                  
                                                  
                                                  
                            <tr v-for="item in obj_municipalidades.data" :key="item.id" role="row" class="odd">

                            <td class="sorting_1"></td>

                            <td>{{item.nombre}}</td>
                            <td>{{item.direccion}}</td>
                            <td>{{item.tipo}}</td>
                            <td>{{item.alcalde}}</td>
                            <td>{{item.paginaweb}}</td>
                            <td>{{item.poblacion}}</td>
                            <td>{{item.monto_autorizado}}</td>
                            <td>
                                <button @click="load_muni(item.id)" type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-create-category">Editar</button>
                            </td>
                        </tr>
                        </tbody></table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="categories_info" role="status" aria-live="polite">Showing 1 to 10 of 1,872 entries</div></div>
                        <div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="categories_paginate"><ul class="pagination">
                            <li class="paginate_button page-item previous " id="categories_previous">

                            <a @click="prev_page(obj_municipalidades.current_page-1)" aria-controls="categories" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>

                            </li><li class="paginate_button page-item active"><a href="#" aria-controls="categories" data-dt-idx="1" tabindex="0" class="page-link">{{obj_municipalidades.current_page}}</a></li><li class="paginate_button page-item next" id="categories_next">
                            
                            <a @click="nex_page(obj_municipalidades.current_page+1)" aria-controls="categories" data-dt-idx="8" tabindex="0" class="page-link">Next</a>
                            </li></ul></div></div></div></div>

            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>

<!-- modal -->

<div class="modal fade" id="modal-create-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="col-md-12">
        <div class="modal-content">
            <div class="card-header" style="background:#4E7BF3;color:white">
                <h4 class="card-title">Municipalidades</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
            </div>
            <div  >
                <div class="card-body">
                        
                            <input type="hidden" name="_token" value="YRHezQvqPlfiVOeXjVtgQ5aGQ25GeEPYDEvjJH40">
                            
                            <div class="form-group">
                                <label for="Municipalidad">Municipalidad</label>
                                    <input v-model="municipalidades.nombre" id="zip" type="text" class="form-control" name="zip" value="" required="" placeholder="Municipalidad" readonly="">
    
                                    
                                        <span class="help-block">
                                            <strong></strong>
                                        </span>
                                    
                            </div>

                            <div class="form-group">
                                <label for="Municipalidad">Dirección</label>
                                    <input  v-model="municipalidades.direccion" id="zip" type="text" class="form-control" name="zip" value="" required="" placeholder="Dirección">
    
                                    
                                        <span class="help-block">
                                            <strong></strong>
                                        </span>
                                    
                            </div>

                            <div class="form-group">
                                <label for="Municipalidad">Tipo</label>
                                    <input v-model="municipalidades.tipo" id="zip" type="text" class="form-control" name="zip" value="" required="" placeholder="Tipo" readonly="">
    
                                    
                                        <span class="help-block">
                                            <strong></strong>
                                        </span>
                                    
                            </div>

                            <div class="form-group">
                                <label for="Municipalidad">Alcalde</label>
                                    <input  v-model="municipalidades.alcalde" id="zip" type="text" class="form-control" name="zip" value="" required="" placeholder="Alcalde">
    
                                    
                                        <span class="help-block">
                                            <strong></strong>
                                        </span>
                                    
                            </div>
                            
                            <div class="form-group">
                                <label for="Paginaweb">Pagina Web</label>
                                    <div class="input-group date">
                                        <input  v-model="municipalidades.paginaweb" type="text" value="" name="date_join" class="form-control pull-right" required="" placeholder="Pagina Web">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="Poblacion">Poblacion</label>
                                    <div class="input-group date">
                                        <input v-model="municipalidades.poblacion" type="text" value="" name="date_join" class="form-control pull-right" required="" placeholder="Poblacion">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="Municipalidad">Presupuesto</label>
                                    <div class="input-group date"> 
                                        <input v-model="municipalidades.monto_autorizado" type="text" value="" name="date_join" class="form-control pull-right" required="" placeholder="Presupuesto">
                                    </div>
                                </div>
                        </div>
                        
                    
                    <div class="card-footer">
                      <button @click="editar(municipalidades.id)"  class="btn btn-primary float-right">Guardar</button>
                    </div>
                </div></div>
             
        </div> 
    </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

                </div>
    </div>
</template>
<script>
export default {
  data() {
    return {
      municipalidades:{
        id:null,
         nombre:null,
         direccion:null,
         tipo:null,
         alcalde:null,
         paginaweb:null,
         poblacion:null,
         monto_autorizado:null,
      },

      obj_municipalidades:[]


      /* nex_page:null,
      prev_page:null */

/* alcalde: (...)
departamento: (...)
direccion: (...)
distrito: (...)
id: 1
monto_autorizado: (...)
nombre: (...)
paginaweb: (...)
poblacion: (...)
provincia: (...)
tipo: (...) */

    };
  },

  created() {
      axios.get("/load").then((res) => {
        this.obj_municipalidades = res.data;
        console.log(this.obj_municipalidades);
      })
      .catch(function (error) {
        // handle error
        console.log(error);
      });
  },

  methods: {
      load_muni(id){
          axios.get("/load/"+id).then((res) => {
            this.municipalidades = res.data;
            console.log(this.municipalidades);
        })
        .catch(function (error) {
            // handle error
            console.log(error);
        });
      },

      editar(id){
        axios.put("/load/"+id,this.municipalidades).then((res) => {
        this.municipalidades = res.data;
      })
      .catch(function (error) {
        // handle error
        console.log(error);
      });
      window.location="http://muni.test/admin/muni"
    },

    nex_page(pagina){
        axios.get("/load",{
          params:{
              page:pagina
          }
      }).then((res) => {
        this.municipalidades = res.data;
        console.log(this.municipalidades);
      })
      .catch(function (error) {
        // handle error
        console.log(error);
      });
    },

     prev_page(pagina){
        axios.get("/load",{
          params:{
              page:pagina
          }
      }).then((res) => {
        this.municipalidades = res.data;
        console.log(this.municipalidades);
      })
      .catch(function (error) {
        // handle error
        console.log(error);
      });
    }
  },

  mounted() {

  },
};
</script>

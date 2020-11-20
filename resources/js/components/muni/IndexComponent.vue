<template>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de Municipalidades</h3>
                </div>

            <div class="card-body">            
                    <div class="form-group col-md-4 float-left">
                        <label for="Departamento">Departamento</label>
                        <select name="Departamento" id="departamento" class="form-control input-lg dynamic" data-dependent="provincia">
                            <option value="">Selecionar Departamento </option>
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
            
            <div class="card">
            <div class="card-body">
                 <table id="example" class="table table-striped">
                    
                    <thead>
                        <tr role="row">
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
                                                  
                                                  
                            <tr v-for="item in obj_municipalidades.data" :key="item.id" role="row" class="odd">

                            <td class="sorting_1">{{item.id}}</td>
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
                        </tbody>
                        </table>
                         </div>  
                        </div>

            </div>

        </div>
    </div>


<div class="modal fade" id="modal-create-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="col-md-12">
        <div class="modal-content">
            <div class="card-header" style="background:#4E7BF3;color:white">
                <h4 class="card-title">Municipalidades</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
            </div>
            <div>
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

    </div>

</div> 

</template>
<script>
import datables from 'datatables'
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
        departamento:[],
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


      mytable(){
             $(function() {
        $('#example').dataTable( {
            "order": [[ 0, "asc" ]]
        });
        });
      },

      load_muni(id){
          axios.get("/load/"+id).then((res) => {
            this.municipalidades = res.data;
            this.mytable()
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
    }

/*     nex_page(pagina){
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
    }  */
  },

  mounted() {
      this.load_muni()
  },
};
</script>

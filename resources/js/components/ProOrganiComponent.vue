<template>
  <div>
    <form @submit.prevent="editarPro(pro)" v-if="modoEditar">
      <h3>Editar</h3>
      <input type="text" class="form-control mb-2"
        placeholder="Descripción de la pro" v-model="pro.descripcion">
      <button class="btn btn-warning" type="submit">Editar</button>
      <button class="btn btn-danger" type="submit"
        @click="cancelarEdicion">Cancelar</button>
    </form>
    <form @submit.prevent="agregar" v-else>
      <!-- <h3>Agregar</h3> -->
      <input type="text" class="form-control mb-2"
        placeholder="Descripción del problema" v-model="pro.descripcion">
      <!-- <select class="form-control mb-4" v-model="pro.descripcion">
       <option value="No contamos con personeria juridica">No contamos con personeria juridica</option>
       <option value="No se tiene un organigrama">No se tiene un organigrama</option>
       <option value="No se tiene un estatuto y/o reglamento">No se tiene un estatuto y/o reglamento</option>
       <option value="No contamos con manual de funciones">No contamos con manual de funciones</option>
       <option value="No contamos con un nit">No contamos con un nit</option>
       <option value="No contamos con rau">No contamos con rau</option>
       <option value="No contamos con funda empresa">No contamos con funda empresa</option>
       <option value="No contamos con targeta empresarial">No contamos con targeta empresarial</option>
       <option value="No contamos con registro sanitario">No contamos con registro sanitario</option>
       <option value="No contamos con spg">No contamos con spg</option>
       <option value="No contamos con certificacion organica">No contamos con certificacion organica</option>
     </select> -->
      <button class="btn btn-primary" type="submit">Agregar</button>
    </form>
    <hr>
    <h3 class="form-control-label text-muted">Lista de problemas organizacionales</h3>
    <ul class="list-group">
        <li class="list-group-item"
             v-for="(item, index) in pros_organi2" :key="index" >
           <p>{{item.descripcion}}</p>
         </li>
         <li class="list-group-item"
            v-for="(item, index) in pros_organi" :key="index" >
          <span class="badge badge-primary float-right">
            {{item.updated_at}}
          </span>

          <p>{{item.descripcion}}</p>
          <p>

            <button class="btn btn-danger btn-sm"
                @click="eliminarPro(item, index)">Eliminar</button>
          </p>
        </li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      pros_organi: [],
      modoEditar: false,
      pro: {descripcion: ''},
      pros_organi2: []
    }
  },
  created(){
    axios.get('/proorgani').then(res=>{
      this.pros_organi = res.data;
    });
    axios.get('/proble_orga2').then(res=>{
      this.pros_organi2 = res.data;
    });
  },
  methods:{
    agregar(){
      if(this.pro.descripcion.trim() === ''){
        alert('Debes completar todos los campos antes de guardar');
        return;
      }
      const proNueva = this.pro;
      this.pro = {descripcion: ''};
      axios.post('/proorgani', proNueva)
        .then((res) =>{
          const proServidor = res.data;
          this.pros_organi.push(proServidor);
        })
    },
    editarFormulario(item){
      this.pro.descripcion = item.descripcion;
      this.pro.id = item.id;
      this.modoEditar = true;
    },
    editarPro(pro){
      const params = {descripcion: pro.descripcion};
      axios.put(`/proorgani/${pro.id}`, params)
        .then(res=>{
          this.modoEditar = false;
          const index = this.pros_organi.findIndex(item => item.id === pro.id);
          this.pros_organi[index] = res.data;
        })
    },
    eliminarPro(pro, index){
      const confirmacion = confirm(`Eliminar problema ${pro.descripcion}`);
      if(confirmacion){
        axios.delete(`/proorgani/${pro.id}`)
          .then(()=>{
            this.pros_organi.splice(index, 1);
          })
      }
    },
    cancelarEdicion(){
      this.modoEditar = false;
      this.pro = {descripcion: ''};
    }
  }
}
</script>

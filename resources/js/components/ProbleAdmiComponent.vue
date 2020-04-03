<template>
  <div>
    <form @submit.prevent="editarPro(pro)" v-if="modoEditar">
      <input type="text" class="form-control mb-2"
        placeholder="...." v-model="pro.descripcion2">
      <!-- <input type="hidden" class="form-control mb-2"
        placeholder="...." v-model="pro.descripcion"> -->
      <button class="btn btn-warning" type="submit">Guardar</button>
      <button class="btn btn-danger" type="submit"
        @click="cancelarEdicion">Cancelar</button>
    </form>
    <form @submit.prevent="agregar" v-else>
      <input type="text" class="form-control mb-2"
        placeholder="Descripción del problema" v-model="pro.descripcion">
      <!-- <select class="form-control" v-model="pro.descripcion">
       <option value="No contamos con sistema contable">No contamos con sistema contable</option>
       <option value="No contamos con manual de funciones">No contamos con manual de funciones</option>
       <option value="No contamos con un inventario">No contamos con un inventario</option>
       <option value="No contamos con manual de proceso">No contamos con manual de proceso</option>
       <option value="No contamos con poa">No contamos con poa</option>
       <option value="No contamos con pei">No contamos con pei</option>
     </select> -->
      <button class="btn btn-primary" type="submit">Agregar</button>
    </form>
    <hr>
    <h3 class="form-control-label text-muted">Lista de problemas administrativos</h3>
    <ul class="list-group">
      <li class="list-group-item"
           v-for="(item, index) in pros_admi2" :key="index" >
         <p class="form-control-label text-muted">{{item.descripcion}}</p>
       </li>
       <li class="list-group-item"
          v-for="(item, index) in pros_admi" :key="index" >
        <span class="badge badge-primary float-right">
          {{item.updated_at}}
        </span>

        <p class="form-control-label text-muted">{{item.descripcion}}</p>
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
      pros_admi: [],
      modoEditar: false,
      pro: {
            descripcion: '',
            descripcion2: ''},
      pros_admi2: []
    }
  },
  created(){
    axios.get('/proadmi').then(res=>{
      this.pros_admi = res.data;
    });
    axios.get('/proble_admi2').then(res=>{
      this.pros_admi2 = res.data;
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
      axios.post('/proadmi', proNueva)
        .then((res) =>{
          const proServidor = res.data;
          this.pros_admi.push(proServidor);
        })
    },
    editarFormulario(item){
      this.pro.descripcion = item.descripcion;
      this.pro.descripcion2 = item.descripcion2;
      this.pro.id = item.id;
      this.modoEditar = true;
    },
    editarPro(pro){
      const params = {descripcion: pro.descripcion, descripcion2: pro.descripcion2};
      axios.put(`/proadmi/${pro.id}`, params)
        .then(res=>{
          this.modoEditar = false;
          const index = this.pros_admi.findIndex(item => item.id === pro.id);
          this.pros_admi[index] = res.data;
        })
    },
    eliminarPro(pro, index){
      const confirmacion = confirm(`Eliminar problema ${pro.descripcion}`);
      if(confirmacion){
        axios.delete(`/proadmi/${pro.id}`)
          .then(()=>{
            this.pros_admi.splice(index, 1);
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

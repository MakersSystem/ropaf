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
        <!-- <select v-model="pro.descripcion" class="form-control mb-3">
          <option value="">~~SELECCIONAR~~</option>
          <option value="NO HAY REPRESENTACION DE VARONES">NO HAY REPRESENTACION DE VARONES</option>
          <option value="NO HAY REPRESENTACION DE MUJERES">NO HAY REPRESENTACION DE MUJERES</option>
          <option value="POCA REPRESENTACION DE VARONES">POCA REPRESENTACION DE VARONES</option>
          <option value="POCA REPRESENTACION DE MUJERES">POCA REPRESENTACION DE MUJERES</option>
          <option value="NO CONTAMOS CON PRESIDENTE">NO CONTAMOS CON PRESIDENTE</option>
          <option value="No contamos con vicepresidente">No contamos con vicepresidente</option>
          <option value="No contamos con gerencia">No contamos con gerencia</option>
          <option value="Poca o nula participacion de jovenes">Poca o nula participacion de jovenes</option>
          <option value="Poca participacion de socios">Poca participacion de socios</option>
          <option value="La organizacion no realiza eventos de capacitacion al personal tenico">La organizacion no realiza eventos de capacitacion al personal tenico</option>
          <option value="La organizacion no cuenta con facilitadores y/o promotores">La organizacion no cuenta con facilitadores y/o promotores</option>
       </select> -->
      <button class="btn btn-primary" type="submit">Agregar</button>
    </form>

    <h2 class="form-control-label text-muted mt-4">Lista de problemas de representacion:</h2>
    <ul class="list-group">
          <li class="list-group-item"
             v-for="(item, index) in pros_repre2" :key="index" >
           <p>{{item.descripcion}}</p>
         </li>
         <li class="list-group-item"
            v-for="(item, index) in pros_repre" :key="index" >
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
      pros_repre: [],
      modoEditar: false,
      pro: {descripcion: ''},
      pros_repre2: []
    }
  },
  created(){
    axios.get('/prorepre').then(res=>{
      this.pros_repre = res.data;
    });
    axios.get('/proble_repre2').then(res=>{
      this.pros_repre2 = res.data;
    })
  },
  methods:{
    agregar(){
      if(this.pro.descripcion.trim() === ''){
        alert('Debes completar todos los campos antes de guardar');
        return;
      }
      const proNueva = this.pro;
      this.pro = {descripcion: ''};
      axios.post('/prorepre', proNueva)
        .then((res) =>{
          const proServidor = res.data;
          this.pros_repre.push(proServidor);
        })
    },
    editarFormulario(item){
      this.pro.descripcion = item.descripcion;
      this.pro.id = item.id;
      this.modoEditar = true;
    },
    editarPro(pro){
      const params = {descripcion: pro.descripcion};
      axios.put(`/prorepre/${pro.id}`, params)
        .then(res=>{
          this.modoEditar = false;
          const index = this.pros_repre.findIndex(item => item.id === pro.id);
          this.pros_repre[index] = res.data;
        })
    },
    eliminarPro(pro, index){
      const confirmacion = confirm(`Eliminar problema ${pro.descripcion}`);
      if(confirmacion){
        axios.delete(`/prorepre/${pro.id}`)
          .then(()=>{
            this.pros_repre.splice(index, 1);
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

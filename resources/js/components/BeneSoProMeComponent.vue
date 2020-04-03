<template>
  <div>
    <form @submit.prevent="editarNota(even)" v-if="modoEditar">
      <h3 class="text-muted">Editar evento</h3>
      <div class="row">
        <div class="col-lg-4">
          <div class="form-group">
            <label class="form-control-label text-muted">Evento</label>
            <input type="text" class="form-control my-3" v-model="even.evento">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="form-group">
            <label class="form-control-label text-muted">Nro. socios/as asistentes</label>
            <input type="number" class="form-control my-3" v-model="even.nro_soci">
          </div>
        </div>
      </div>
      <button class="btn btn-warning" type="submit">Editar</button>
      <button class="btn btn-danger" type="submit"
        @click="cancelarEdicion">Cancelar</button>
    </form>
    <form @submit.prevent="agregar" v-else>
      <div class="pl-lg-4">
        <div class="row">
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Evento</label>
              <input type="text" class="form-control my-3" v-model="even.evento">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Nro. socios/as asistentes</label>
              <input type="number" class="form-control my-3" v-model="even.nro_soci">
            </div>
          </div>
        </div>
      </div>
      <button class="btn btn-primary" type="submit">Agregar</button>
    </form>
    <hr>
    <h3 class="text-muted">Eventos: </h3>
    <ul class="list-group">
         <li class="list-group-item"
         v-for="(item, index) in eventos" :key="index">
          <div class="pl-lg-4">
            <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label text-muted">Evento</label>
                    <!-- <input type="text" class="form-control my-3" v-model="even.pro"> -->
                    {{ item.evento }}
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label text-muted">Nro. socios/as asistentes</label>
                    <!-- <input type="text" class="form-control my-3" v-model="even.sup_cul"> -->
                    {{ item.nro_soci }}
                  </div>
                </div>
              </div>
            </div>
          <p>
            <button class="btn btn-warning btn-sm"
                @click="editarFormulario(item)">Editar</button>
            <button class="btn btn-danger btn-sm"
                @click="eliminarNota(item, index)">Eliminar</button>
          </p>
        </li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      eventos: [],
      modoEditar: false,
      even: {evento: '', nro_soci: ''},
      aux : 0
    }
  },
  created(){
    axios.get('/benesoc').then(res=>{
      this.eventos = res.data;
    })
  },
  methods:{
    agregar(){
      if(this.aux == 0){
        if(this.even.evento.trim() === '' || this.even.nro_soci.trim() === ''){
          alert('Debes completar todos los campos antes de guardar');
          return;
        }
        const evenNueva = this.even;
        this.even = {evento: '', nro_soci: ''};
        axios.post('/benesoc', evenNueva)
          .then((res) =>{
            const evenServidor = res.data;
            this.eventos.push(evenServidor);
          })
        this.muestra = true;
      }else{
        this.aux = 0;
      }
    },
    editarFormulario(item){
      this.even.evento = item.evento;
      this.even.nro_soci = item.nro_soci;
      this.even.id = item.id;
      this.modoEditar = true;
    },
    editarNota(even){
      const params = {evento: even.evento, nro_soci: even.nro_soci};
      axios.put(`/benesoc/${even.id}`, params)
        .then(res=>{
          this.modoEditar = false;
          const index = this.eventos.findIndex(item => item.id === even.id);
          this.eventos[index] = res.data;
          this.even = {evento: '', nro_soci: ''};
        })
    },
    eliminarNota(even, index){
      const confirmacion = confirm(`Eliminar producto agricola ${even.nombre}`);
      if(confirmacion){
        axios.delete(`/benesoc/${even.id}`)
          .then(()=>{
            this.eventos.splice(index, 1);
          })
      }
    },
    cancelarEdicion(){
      this.modoEditar = false;
      this.even = {evento: '', nro_soci: ''};
      this.aux = 1;
    }
  }
}
</script>

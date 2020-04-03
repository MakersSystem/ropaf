<template>
  <div>
    <form @submit.prevent="editarPro(cli)" v-if="modoEditar">
      <h3 class="text-muted">Editar</h3>
      <div class="pl-lg-4">
        <div class="row">
          <div class="col-lg-3">
            <div class="form-group">
              <label class="form-control-label text-muted">Cliente/Mercado</label>
              <input type="text" class="form-control my-3" v-model="cli.cli_merc">
              <!-- {{item.cliducto}} -->
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label class="form-control-label text-muted">Año anterior</label>
              <input type="number" class="form-control my-3" placeholder="porcentaje" v-model="cli.ani_ant">
              <!-- {{item.cliducto}} -->
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label class="form-control-label text-muted">Año actual</label>
              <input type="number" class="form-control my-3" placeholder="porcentaje" v-model="cli.ani_act">
              <!-- {{item.caracterisitcas}} -->
            </div>
          </div>
        </div>
      </div>
      <button class="btn btn-warning" type="submit">Editar</button>
      <button class="btn btn-danger" type="submit"
        @click="cancelarEdicion">Cancelar</button>
    </form>
    <form @submit.prevent="agregar" v-else>
      <h3 class="text-muted">Agregar</h3>
      <div class="pl-lg-4">
        <div class="row">
          <div class="col-lg-3">
            <div class="form-group">
              <label class="form-control-label text-muted">Cliente/Mercado</label>
              <input type="text" class="form-control my-3" v-model="cli.cli_merc">
              <!-- {{item.cliducto}} -->
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label class="form-control-label text-muted">Año anterior</label>
              <input type="number" class="form-control my-3" placeholder="porcentaje" v-model="cli.ani_ant">
              <!-- {{item.cliducto}} -->
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label class="form-control-label text-muted">Año actual</label>
              <input type="number" class="form-control my-3" placeholder="porcentaje" v-model="cli.ani_act">
              <!-- {{item.caracterisitcas}} -->
            </div>
          </div>
        </div>
      </div>
      <button class="btn btn-primary" type="submit">Agregar</button>
    </form>
    <hr>
    <h3 class="text-muted">Lista de clientes:</h3>
    <ul class="list-group">
         <li class="list-group-item"
            v-for="(item, index) in clientes" :key="index">

          <div class="pl-lg-4">
            <div class="row">
                <div class="col-lg-3">
                   <div class="form-group">
                     <label class="form-control-label text-muted">Cliente / Mercado</label>
                     <!-- <input type="number" class="form-control my-3" v-model="cli.ani_ant"> -->
                     {{item.cli_merc}}
                   </div>
                 </div>
                 <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Permanencia cliente Año anterior</label>
                      <!-- <input type="number" class="form-control my-3" v-model="cli.ani_ant"> -->
                      {{item.ani_ant}}%
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Permanencia cliente Año actual</label>
                      <!-- <input type="number" class="form-control my-3" v-model="cli.ani_act"> -->
                      {{item.ani_act}}%
                    </div>
                  </div>
            </div>
          </div>
          <p>
            <button class="btn btn-warning btn-sm"
                @click="editarFormulario(item)">Editar</button>
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
      clientes: [],
      modoEditar: false,
      cli: {cli_merc: '', ani_ant: '', ani_act: ''}
    }
  },
  created(){
    axios.get('/climer').then(res=>{
      this.clientes = res.data;
    })
  },
  methods:{
    agregar(){
      if(this.cli.cli_merc.trim() === ''){
        alert('Debes completar todos los campos antes de guardar');
        return;
      }
      const cliNueva = this.cli;
      this.cli = {cli_merc: '', ani_ant: '', ani_act: ''};
      axios.post('/climer', cliNueva)
        .then((res) =>{
          const cliServidor = res.data;
          this.clientes.push(cliServidor);
        })
    },
    editarFormulario(item){
      this.cli.cli_merc = item.cli_merc;
      this.cli.ani_ant = item.ani_ant;
      this.cli.ani_act = item.ani_act;
      this.cli.id = item.id;
      this.modoEditar = true;
    },
    editarPro(cli){
      const params = {cli_merc: cli.cli_merc,
                      ani_ant: cli.ani_ant,
                      ani_act: cli.ani_act};
      axios.put(`/climer/${cli.id}`, params)
        .then(res=>{
          this.modoEditar = false;
          const index = this.clientes.findIndex(item => item.id === cli.id);
          this.clientes[index] = res.data;
          this.cli = {cli_merc: '', ani_ant: '', ani_act: ''};
        })
    },
    eliminarPro(cli, index){
      const confirmacion = confirm(`Eliminar cliblema ${cli.nombre}`);
      if(confirmacion){
        axios.delete(`/climer/${cli.id}`)
          .then(()=>{
            this.clientes.splice(index, 1);
          })
      }
    },
    cancelarEdicion(){
      this.modoEditar = false;
      this.cli = {cli_merc: '', ani_ant: '', ani_act: ''};
    }
  }
}
</script>

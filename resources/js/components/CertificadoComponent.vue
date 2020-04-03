<template>
  <div>
    <form @submit.prevent="editarPro(cert)" v-if="modoEditar">
      <h3 class="text-muted">Editar</h3>
      <div class="pl-lg-4">
        <div class="row">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label text-muted">Tipo de certificado</label>
                  <select class="form-control" v-model="cert.tipo">
                   <option value="IMO">IMO</option>
                   <option value="CCONTROL">CCONTROL</option>
                   <option value="BIOLATINA">Ecologica</option>
                   <option value="CERES">BIOLATINA</option>
                   <option value="BOLICERT">BOLICERT</option>
                   <option value="ECOCERT">ECOCERT</option>
                 </select>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label text-muted">Promedio superficie en metros cuadrados</label>
                  <input type="number" class="form-control my-3" v-model="cert.prom_super">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label text-muted">Principal cultivo</label>
                  <input type="text" class="form-control my-3" v-model="cert.pri_cul">
                </div>
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
                  <label class="form-control-label text-muted">Tipo de Certificado</label>
                  <!-- <input type="text" class="form-control my-3" v-model="cert.tipo"> -->
                  <select class="form-control" v-model="cert.tipo">
                   <option value="IMO">IMO</option>
                   <option value="CCONTROL">CCONTROL</option>
                   <option value="BIOLATINA">Ecologica</option>
                   <option value="CERES">BIOLATINA</option>
                   <option value="BOLICERT">BOLICERT</option>
                   <option value="ECOCERT">ECOCERT</option>
                 </select>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label text-muted">Promedio superficie en metros cuadrados</label>
                  <input type="number" class="form-control" v-model="cert.prom_super">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label text-muted">Principal cultivo</label>
                  <input type="text" class="form-control" v-model="cert.pri_cul">
                </div>
              </div>
        </div>
        <button class="btn btn-primary" type="submit">Agregar</button>
      </div>


    </form>
    <hr>
    <h1 class="text-muted">Lista de certificados:</h1>
    <ul class="list-group">
         <li class="list-group-item"
            v-for="(item, index) in certificados" :key="index" >
          <div class="pl-lg-4 card bg-dark">
            <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted"><b>Tipo de Certificado</b> </label><br/>
                      <!-- <input type="text" class="form-control my-3" v-model="cert.tipo"> -->
                      <b class="text-white">{{item.tipo}}</b>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted"><b>Promedio Superficie en metros cuadrados</b> </label><br/>
                      <!-- <input type="number" class="form-control my-3" v-model="cert.prom_super"> -->
                      <b class="text-white">{{item.prom_super}}</b>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted"><b>Principal Cultivo</b> </label> <br/>
                      <!-- <input type="number" class="form-control my-3" v-model="cert.pri_cul"> -->
                      <b class="text-white"> {{item.pri_cul}} </b>
                    </div>
                  </div>

            </div>
          </div>


            <button class="btn btn-warning btn-sm"
                @click="editarFormulario(item)">Editar</button>
            <button class="btn btn-danger btn-sm"
                @click="eliminarPro(item, index)">Eliminar</button>

        </li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      certificados: [],
      modoEditar: false,
      cert: {tipo: '', prom_super: '', pri_cul: ''}
    }
  },
  created(){
    axios.get('/certi').then(res=>{
      this.certificados = res.data;
    })
  },
  methods:{
    agregar(){
      if(this.cert.tipo.trim() === ''){
        alert('Debes completar todos los campos antes de guardar');
        return;
      }
      const certNueva = this.cert;
      this.cert = {tipo: '', prom_super: '', pri_cul: ''};
      axios.post('/certi', certNueva)
        .then((res) =>{
          const certServidor = res.data;
          this.certificados.push(certServidor);
        })
    },
    editarFormulario(item){
      this.cert.tipo = item.tipo;
      this.cert.prom_super = item.prom_super;
      this.cert.pri_cul = item.pri_cul;
      this.cert.id = item.id;
      this.modoEditar = true;
    },
    editarPro(cert){
      const params = {tipo: cert.tipo, prom_super: cert.prom_super, pri_cul: cert.pri_cul};
      axios.put(`/certi/${cert.id}`, params)
        .then(res=>{
          this.modoEditar = false;
          const index = this.certificados.findIndex(item => item.id === cert.id);
          this.certificados[index] = res.data;
          this.cert = {tipo: '',
                      prom_super: '',
                      pri_cul: ''};
        })
    },
    eliminarPro(cert, index){
      const confirmacion = confirm(`Eliminar certificado ${cert.tipo}`);
      if(confirmacion){
        axios.delete(`/certi/${cert.id}`)
          .then(()=>{
            this.certificados.splice(index, 1);
          })
      }
    },
    cancelarEdicion(){
      this.modoEditar = false;
      this.cert = {tipo: '',
                  prom_super: '',
                  pri_cul: ''};
    }
  }
}
</script>

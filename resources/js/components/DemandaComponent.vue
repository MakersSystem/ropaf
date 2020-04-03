<template>
  <div>
    <form @submit.prevent="editarPro(cert)" v-if="modoEditar">
      <h3>Editar</h3>
      <div class="pl-lg-4">
        <div class="row">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label text-muted">Tipo de certificado</label>
                  <input type="text" class="form-control my-3" v-model="cert.tipo">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label text-muted">Promedio superficie</label>
                  <input type="number" class="form-control my-3" v-model="cert.prom_super">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label text-muted">Principales cultivos</label>
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
                  <label class="form-control-label text-muted">¿Es una demanda a servicios financieros?</label>
                  <!-- <input type="text" class="form-control my-3" v-model="cert.financ"> -->
                  <select class="form-control" v-model="cert.financ">
                   <option value="si">SI</option>
                   <option value="no">NO</option>
                 </select>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="form-group">
                  <label class="form-control-label text-muted">Demanda</label>
                  <input type="text" class="form-control" v-model="cert.demanda">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label text-muted">Tipo de servicio</label>
                  <input type="text" class="form-control" v-model="cert.tipo_serv">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="form-group">
                  <label class="form-control-label text-muted">Explicar ¿ Para que ?</label>
                  <input type="text" class="form-control" v-model="cert.para_q">
                </div>
              </div>
        </div>
        <button class="btn btn-primary" type="submit">Agregar</button>
      </div>


    </form>
    <hr>

    <ul class="list-group">
         <h2 class="text-muted">Demandas de servicios financieros:</h2>
         <li class="list-group-item"
            v-for="(item, index) in demandas" :key="index" >
          <!-- <span class="badge badge-primary float-right">
            {{item.updated_at}}
          </span> -->
          <div class="pl-lg-4 card bg-dark" v-if="item.financ === 'si'">
            <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted"><b>Demanda</b> </label><br/>
                      <!-- <input type="text" class="form-control my-3" v-model="cert.tipo"> -->
                      <b class="text-white">{{item.demanda}}</b>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted"><b>Tipo de servicio</b> </label><br/>
                      <!-- <input type="number" class="form-control my-3" v-model="cert.prom_super"> -->
                      <b class="text-white">{{item.tipo_serv}}</b>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted"><b>¿ Para que ?</b> </label> <br/>
                      <!-- <input type="number" class="form-control my-3" v-model="cert.pri_cul"> -->
                      <b class="text-white"> {{item.para_q}} </b>
                    </div>
                  </div>
            </div>

          </div>


          <button class="btn btn-warning btn-sm"
              @click="editarFormulario(item)" v-if="item.financ === 'si'">Editar</button>
          <button class="btn btn-danger btn-sm"
              @click="eliminarPro(item, index)" v-if="item.financ === 'si'">Eliminar</button>

        </li>
        <hr class="my-4" />
        <h2 class="text-muted">Demandas de servicios no financieros:</h2>
        <li class="list-group-item"
           v-for="(item, index) in demandas" :key="index" >
         <!-- <span class="badge badge-primary float-right">
           {{item.updated_at}}
         </span> -->
         <div class="pl-lg-4 card bg-dark" v-if="item.financ === 'no'">
           <div class="row">
                 <div class="col-lg-4">
                   <div class="form-group">
                     <label class="form-control-label text-muted"><b>Demanda</b> </label><br/>
                     <!-- <input type="text" class="form-control my-3" v-model="cert.tipo"> -->
                     <b class="text-white">{{item.demanda}}</b>
                   </div>
                 </div>
                 <div class="col-lg-4">
                   <div class="form-group">
                     <label class="form-control-label text-muted"><b>Tipo de servicio</b> </label><br/>
                     <!-- <input type="number" class="form-control my-3" v-model="cert.prom_super"> -->
                     <b class="text-white">{{item.tipo_serv}}</b>
                   </div>
                 </div>
                 <div class="col-lg-4">
                   <div class="form-group">
                     <label class="form-control-label text-muted"><b>¿ Para que ?</b> </label> <br/>
                     <!-- <input type="number" class="form-control my-3" v-model="cert.pri_cul"> -->
                     <b class="text-white"> {{item.para_q}} </b>
                   </div>
                 </div>
           </div>
         </div>


         <button class="btn btn-warning btn-sm"
             @click="editarFormulario(item)" v-if="item.financ === 'no'">Editar</button>
         <button class="btn btn-danger btn-sm"
             @click="eliminarPro(item, index)" v-if="item.financ === 'no'">Eliminar</button>

       </li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      demandas: [],
      modoEditar: false,
      cert: {financ: '', demanda: '', tipo_serv: '', para_q: ''}
    }
  },
  created(){
    axios.get('/deman').then(res=>{
      this.demandas = res.data;
    })
  },
  methods:{
    agregar(){
      if(this.cert.demanda.trim() === ''){
        alert('Debes completar todos los campos antes de guardar');
        return;
      }
      const certNueva = this.cert;
      this.cert = {financ: '', demanda: '', tipo_serv: '', para_q: ''};
      axios.post('/deman', certNueva)
        .then((res) =>{
          const certServidor = res.data;
          this.demandas.push(certServidor);
        })
    },
    editarFormulario(item){
      this.cert.detalle = item.financ;
      this.cert.precio = item.demanda;
      this.cert.nro_soc = item.tipo_serv;
      this.cert.pro_uni = item.para_q;
      this.cert.id = item.id;
      this.modoEditar = true;
    },
    editarPro(cert){
      const params = {financ: cert.financ, demanda: cert.demanda, tipo_serv: cert.tipo_serv, para_q: cert.para_q};
      axios.put(`/certi/${cert.id}`, params)
        .then(res=>{
          this.modoEditar = false;
          const index = this.demandas.findIndex(item => item.id === cert.id);
          this.demandas[index] = res.data;
        })
    },
    eliminarPro(cert, index){
      const confirmacion = confirm(`Eliminar certificado ${cert.tipo}`);
      if(confirmacion){
        axios.delete(`/certi/${cert.id}`)
          .then(()=>{
            this.demandas.splice(index, 1);
          })
      }
    },
    cancelarEdicion(){
      this.modoEditar = false;
      this.cert = {tipo: ''};
    }
  }
}
</script>

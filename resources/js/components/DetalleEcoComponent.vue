<template>
  <div>
    <form @submit.prevent="editarPro(cert)" v-if="modoEditar">
      <h3 class="text-muted">Editar</h3>
      <div class="pl-lg-4">
        <div class="row">
          <div class="col-lg-8">
            <div class="form-group">
              <label class="form-control-label text-muted">Detalle</label>
              <input type="text" class="form-control my-3" v-model="cert.detalle">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Precio/unidad Bs.</label>
              <input type="number" class="form-control" v-model="cert.precio">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label text-muted">N° Socios Beneficiados</label>
              <input type="number" class="form-control" v-model="cert.nro_soc">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Peso Kg./unidad</label>
              <input type="number" class="form-control" v-model="cert.pro_uni">
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
          <div class="col-lg-8">
            <div class="form-group">
              <label class="form-control-label text-muted">Detalle</label>
              <input type="text" class="form-control my-3" v-model="cert.detalle">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Precio/unidad Bs.</label>
              <input type="number" class="form-control" v-model="cert.precio">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label text-muted">N° Socios Beneficiados</label>
              <input type="number" class="form-control" v-model="cert.nro_soc">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Peso Kg./unidad</label>
              <input type="number" class="form-control" v-model="cert.pro_uni">
            </div>
          </div>
        </div>
      </div>
      <button class="btn btn-primary" type="submit">Agregar</button>
    </form>
    <hr>
    <h1 class="text-muted">Apoyo de la organizacion:</h1>
    <ul class="list-group">
         <li class="list-group-item"
            v-for="(item, index) in detalles" :key="index" >
          <!-- <span class="badge badge-primary float-right">
            {{item.updated_at}}
          </span> -->
          <div class="pl-lg-4 card bg-dark">
            <div class="row">
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label text-muted"><b>Detalle</b> </label><br/>
                  <!-- <input type="text" class="form-control my-3" v-model="cert.tipo"> -->
                  <b class="text-white">{{item.detalle}}</b>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label text-muted"><b>Precio/unidad Bs.</b> </label><br/>
                  <!-- <input type="number" class="form-control my-3" v-model="cert.prom_super"> -->
                  <b class="text-white">{{item.precio}}</b>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label text-muted"><b>N° Socios Beneficiados</b> </label> <br/>
                  <!-- <input type="number" class="form-control my-3" v-model="cert.pri_cul"> -->
                  <b class="text-white"> {{item.nro_soc}} </b>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label text-muted"><b>Peso Kg./unidad</b> </label> <br/>
                  <!-- <input type="number" class="form-control my-3" v-model="cert.pri_cul"> -->
                  <b class="text-white"> {{item.pro_uni}} </b>
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
      detalles: [],
      modoEditar: false,
      cert: {detalle: '', precio: '', nro_soc: '', pro_uni: ''}
    }
  },
  created(){
    axios.get('/detaeco').then(res=>{
      this.detalles = res.data;
    })
  },
  methods:{
    agregar(){
      if(this.cert.detalle.trim() === ''){
        alert('Debes completar todos los campos antes de guardar');
        return;
      }
      const certNueva = this.cert;
      this.cert = {detalle: '', precio: '', nro_soc: '', pro_uni: ''};
      axios.post('/detaeco', certNueva)
        .then((res) =>{
          const certServidor = res.data;
          this.detalles.push(certServidor);
        })
    },
    editarFormulario(item){
      this.cert.detalle = item.detalle;
      this.cert.precio = item.precio;
      this.cert.nro_soc = item.nro_soc;
      this.cert.pro_uni = item.pro_uni;
      this.cert.id = item.id;
      this.modoEditar = true;
    },
    editarPro(cert){
      const params = {detalle: cert.detalle,
                      precio: cert.precio,
                      nro_soc: cert.nro_soc,
                      pro_uni: cert.pro_uni};
      axios.put(`/detaeco/${cert.id}`, params)
        .then(res=>{
          this.modoEditar = false;
          const index = this.detalles.findIndex(item => item.id === cert.id);
          this.detalles[index] = res.data;
          this.cert = {detalle: '', precio: '', nro_soc: '', pro_uni: ''};
        })
    },
    eliminarPro(cert, index){
      const confirmacion = confirm(`Eliminar certificado ${cert.tipo}`);
      if(confirmacion){
        axios.delete(`/detaeco/${cert.id}`)
          .then(()=>{
            this.detalles.splice(index, 1);
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

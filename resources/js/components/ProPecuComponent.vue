<template>
  <div>
    <form @submit.prevent="editarNota(pro_pecu)" v-if="modoEditar">
      <h3 class="text-muted">Editar producto pecuario</h3>
      <div class="pl-lg-4">
        <div class="row">
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Principal Animal Criado de la Ultima Campaña</label>
              <input type="text" class="form-control my-3" v-model="pro_pecu.pro">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Promedio del Numero Total de Animales</label>
              <input type="number" class="form-control my-3" v-model="pro_pecu.tot_ani">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Promedio de N° de animales utilizados por socio/a</label>
              <input type="number" class="form-control my-3" v-model="pro_pecu.ani_uti">
            </div>
          </div>
        </div>
      </div>
      <div class="pl-lg-4">
        <div class="row">
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Promedio N° de crias que nacen anualmente por socio/a</label>
              <input type="number" class="form-control my-3" v-model="pro_pecu.ani_nac">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Precio promedio en Bs por animal (precio productor)</label>
              <input type="number" class="form-control my-3" v-model="pro_pecu.pre_ani">
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
                  <label class="form-control-label text-muted">Principal Animal Criado de la Ultima Campaña</label>
                  <input type="text" class="form-control my-3" v-model="pro_pecu.pro">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label text-muted">Promedio del Numero Total de Animales</label>
                  <input type="number" class="form-control my-3" v-model="pro_pecu.tot_ani">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label text-muted">Promedio de N° de animales utilizados por socio/a</label>
                  <input type="number" class="form-control my-3" v-model="pro_pecu.ani_uti">
                </div>
              </div>
        </div>
      </div>
      <div class="pl-lg-4">
        <div class="row">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label text-muted">Promedio N° de crias que nacen anualmente por socio/a</label>
                  <input type="number" class="form-control my-3" v-model="pro_pecu.ani_nac">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label text-muted">Precio promedio en Bs por animal (precio productor)</label>
                  <input type="number" class="form-control my-3" v-model="pro_pecu.pre_ani">
                </div>
              </div>
        </div>
      </div>
      <button class="btn btn-primary" type="submit">Agregar</button>
    </form>
    <hr>
    <h3 class="text-muted">Lista de productos pecuarios:</h3>
    <ul class="list-group">
         <li class="list-group-item"
            v-for="(item, index) in pros_pecu" :key="index" >
          <span class="badge badge-primary float-right">
            {{item.updated_at}}
          </span>

          <div class="pl-lg-4 card bg-dark">
            <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted"><b>Principal Cultivo de la Ultima Campaña</b> </label>
                      <!-- <input type="text" class="form-control my-3" v-model="pro_pecu.pro"> -->
                      <b>{{ item.pro }}</b>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted"><b>Superficie Promedio en "Ha" por Cultivo</b> </label>
                      <!-- <input type="text" class="form-control my-3" v-model="pro_pecu.sup_cul"> -->
                      <b>{{ item.tot_ani }}</b>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted"><b>Produccion Promedio Anual en Kilos por Socio/a</b> </label>
                      <!-- <input type="text" class="form-control my-3" v-model="pro_pecu.pro_soc"> -->
                      <b>{{ item.ani_uti }}</b>
                    </div>
                  </div>
                </div>
              </div>
          <div class="pl-lg-4 card bg-dark">
            <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label text-muted"><b>Cantidad promedio entregada en kilos anualmente a la Organizacion por socio/a</b> </label>
                    <!-- <input type="text" class="form-control my-3" v-model="pro_pecu.cant_entr"> -->
                    <b>{{ item.ani_nac }}</b>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label text-muted"><b>Cantidad promedio por socio vendida a otros en kilos</b> </label>
                    <!-- <input type="text" class="form-control my-3" v-model="pro_pecu.cant_vend"> -->
                    <b>{{ item.pre_ani }}</b>
                  </div>
                </div>
            </div>
          </div>

            <button class="btn btn-warning btn-sm"
                @click="editarFormulario(item)">Editar</button>
            <button class="btn btn-danger btn-sm"
                @click="eliminarNota(item, index)">Eliminar</button>

        </li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      pros_pecu: [],
      modoEditar: false,
      pro_pecu: {pro: '', tot_ani: '', ani_uti: '', ani_nac: '', pre_ani: ''},
      aux : 0
    }
  },
  created(){
    axios.get('/propecu').then(res=>{
      this.pros_pecu = res.data;
    })
  },
  methods:{
    agregar(){
      if(this.aux == 0){
        if(this.pro_pecu.pro.trim() === '' || this.pro_pecu.tot_ani.trim() === ''
            || this.pro_pecu.ani_uti.trim() === '' || this.pro_pecu.ani_nac.trim() === ''){
          alert('Debes completar todos los campos antes de guardar');
          return;
        }
        const pro_pecuNueva = this.pro_pecu;
        this.pro_pecu = {pro: '', tot_ani: '', ani_uti: '', ani_nac: '', pre_ani: ''};
        axios.post('/propecu', pro_pecuNueva)
          .then((res) =>{
            const pro_pecuServidor = res.data;
            this.pros_pecu.push(pro_pecuServidor);
          })
      }else{
        this.aux = 0;
      }
    },
    editarFormulario(item){
      this.pro_pecu.pro = item.pro;
      this.pro_pecu.tot_ani = item.tot_ani;
      this.pro_pecu.ani_uti = item.ani_uti;
      this.pro_pecu.ani_nac = item.ani_nac;
      this.pro_pecu.pre_ani = item.pre_ani;
      this.pro_pecu.id = item.id;
      this.modoEditar = true;
    },
    editarNota(pro_pecu){
      const params = {pro: pro_pecu.pro,
                      tot_ani: pro_pecu.tot_ani,
                      ani_uti: pro_pecu.ani_uti,
                      ani_nac: pro_pecu.ani_nac,
                      pre_ani: pro_pecu.pre_ani
                      };
      axios.put(`/propecu/${pro_pecu.id}`, params)
        .then(res=>{
          this.modoEditar = false;
          const index = this.pros_pecu.findIndex(item => item.id === pro_pecu.id);
          this.pros_pecu[index] = res.data;
          this.pro_pecu = {pro: '', tot_ani: '', ani_uti: '', ani_nac: '', pre_ani: ''};
        })
    },
    eliminarNota(pro_pecu, index){
      const confirmacion = confirm(`Eliminar producto agricola ${pro_pecu.nombre}`);
      if(confirmacion){
        axios.delete(`/propecu/${pro_pecu.id}`)
          .then(()=>{
            this.pros_pecu.splice(index, 1);
          })
      }
    },
    cancelarEdicion(){
      this.modoEditar = false;
      this.pro_pecu = {pro: '', tot_ani: '', ani_uti: '', ani_nac: '', pre_ani: ''};
      this.aux = 1;
    }
  }
}
</script>

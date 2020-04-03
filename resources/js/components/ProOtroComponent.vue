<template>
  <div>
    <form @submit.prevent="editarNota(pro_otro)" v-if="modoEditar">
      <h3 class="text-muted">Editar Producto</h3>
      <div class="pl-lg-4">
        <div class="row">
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Principales productos elaborados de la ultima campaña</label>
              <input type="text" class="form-control my-3" v-model="pro_otro.pro">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Produccion promedio anual en kilos por socio/a</label>
              <input type="number" class="form-control my-3" v-model="pro_otro.pro_anu">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Cantidad promedio entregada en kilos anualmente a la Organizacion por socio/a</label>
              <input type="number" class="form-control my-3" v-model="pro_otro.can_ent">
            </div>
          </div>
        </div>
      </div>
      <div class="pl-lg-4">
        <div class="row">
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Cantidad total vendida a otros por socio/a en kilos</label>
              <input type="number" class="form-control my-3" v-model="pro_otro.can_ven">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Precio promedio en Bs (precio productor)</label>
              <input type="number" class="form-control my-3" v-model="pro_otro.pre_pro">
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
              <label class="form-control-label text-muted">Principales productos elaborados de la ultima campaña</label>
              <input type="text" class="form-control my-3" v-model="pro_otro.pro">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Produccion promedio anual en kilos por socio/a</label>
              <input type="number" class="form-control my-3" v-model="pro_otro.pro_anu">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Cantidad promedio entregada en kilos anualmente a la Organizacion por socio/a</label>
              <input type="number" class="form-control my-3" v-model="pro_otro.can_ent">
            </div>
          </div>
        </div>
      </div>
      <div class="pl-lg-4">
        <div class="row">
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Cantidad total vendida a otros por socio/a en kilos</label>
              <input type="number" class="form-control my-3" v-model="pro_otro.can_ven">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Precio promedio en Bs (precio productor)</label>
              <input type="number" class="form-control my-3" v-model="pro_otro.pre_pro">
            </div>
          </div>
        </div>
      </div>
      <button class="btn btn-primary" type="submit">Agregar</button>
    </form>
    <hr>
    <h3 class="text-muted">Lista de otros productos:</h3>
    <ul class="list-group">
         <li class="list-group-item"
            v-for="(item, index) in pros_otro" :key="index" >
          <span class="badge badge-primary float-right">
            {{item.updated_at}}
          </span>

          <div class="pl-lg-4 card bg-dark">
            <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Principales Productos Elaborados de la Ultima Campaña</label>
                      <!-- <input type="text" class="form-control my-3" v-model="pro_otro.pro"> -->
                      {{ item.pro }}
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Produccion Promedio Anual en kilos por Socio/a</label>
                      <!-- <input type="text" class="form-control my-3" v-model="pro_otro.sup_cul"> -->
                      {{ item.pro_anu }}
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted">Cantidad Promedio Entregada en kilos Anualmente a la Organizacion por Socio/a</label>
                      <!-- <input type="text" class="form-control my-3" v-model="pro_otro.pro_soc"> -->
                      {{ item.can_ent }}
                    </div>
                  </div>
                </div>
              </div>
          <div class="pl-lg-4 card bg-dark">
            <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label text-muted">Cantidad total vendida a otros por socio/a en kilos</label>
                    <!-- <input type="text" class="form-control my-3" v-model="pro_otro.cant_entr"> -->
                    {{ item.can_ven }}
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label text-muted">Precio promedio en Bs (precio productor)</label>
                    <!-- <input type="text" class="form-control my-3" v-model="pro_otro.cant_vend"> -->
                    {{ item.pre_pro }}
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
      pros_otro: [],
      modoEditar: false,
      pro_otro: {pro: '', pro_anu: '', can_ent: '', can_ven: '', pre_pro: ''},
      aux : 0
    }
  },
  created(){
    axios.get('/prootro').then(res=>{
      this.pros_otro = res.data;
    })
  },
  methods:{
    agregar(){
      if(this.aux == 0){
        if(this.pro_otro.pro.trim() === '' || this.pro_otro.pro_anu.trim() === ''
            || this.pro_otro.can_ent.trim() === '' || this.pro_otro.can_ven.trim() === ''){
          alert('Debes completar todos los campos antes de guardar');
          return;
        }
        const pro_otroNueva = this.pro_otro;
        this.pro_otro = {pro: '', pro_anu: '', can_ent: '', can_ven: '', pre_pro: ''};
        axios.post('/prootro', pro_otroNueva)
          .then((res) =>{
            const pro_otroServidor = res.data;
            this.pros_otro.push(pro_otroServidor);
          })
      }else{
        this.aux = 0;
      }
    },
    editarFormulario(item){
      this.pro_otro.pro = item.pro;
      this.pro_otro.pro_anu = item.pro_anu;
      this.pro_otro.can_ent = item.can_ent;
      this.pro_otro.can_ven = item.can_ven;
      this.pro_otro.pre_pro = item.pre_pro;
      this.pro_otro.id = item.id;
      this.modoEditar = true;
    },
    editarNota(pro_otro){
      const params = {pro: pro_otro.pro,
                      pro_anu: pro_otro.pro_anu,
                      can_ent: pro_otro.can_ent,
                      can_ven: pro_otro.can_ven,
                      pre_pro: pro_otro.pre_pro
                      };
      axios.put(`/prootro/${pro_otro.id}`, params)
        .then(res=>{
          this.modoEditar = false;
          const index = this.pros_otro.findIndex(item => item.id === pro_otro.id);
          this.pros_otro[index] = res.data;
          this.pro_otro = {pro: '', pro_anu: '', can_ent: '', can_ven: '', pre_pro: ''};
        })
    },
    eliminarNota(pro_otro, index){
      const confirmacion = confirm(`Eliminar producto agricola ${pro_otro.nombre}`);
      if(confirmacion){
        axios.delete(`/prootro/${pro_otro.id}`)
          .then(()=>{
            this.pros_otro.splice(index, 1);
          })
      }
    },
    cancelarEdicion(){
      this.modoEditar = false;
      this.pro_otro = {pro: '', pro_anu: '', can_ent: '', can_ven: '', pre_pro: ''};
      this.aux = 1;
    }
  }
}
</script>

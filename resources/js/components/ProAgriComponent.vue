<template>
  <div>
    <form @submit.prevent="editarNota(pro_agri)" v-if="modoEditar">
      <h3 class="text-muted">Editar pro_agri</h3>
      <div class="pl-lg-4">
        <div class="row">
          <div class="col-lg-3">
            <div class="form-group">
              <label class="form-control-label text-muted">Principal cultivo de la ultima campaña</label>
              <input type="text" class="form-control my-3" v-model="pro_agri.pro">
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label class="form-control-label text-muted">Superficie promedio en Hectarea por cultivo</label>
              <input type="number" class="form-control my-3" v-model="pro_agri.sup_cul">
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label class="form-control-label text-muted">Produccion promedio anual en kilos por socio/a</label>
              <input type="number" class="form-control my-3" v-model="pro_agri.pro_soc">
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label class="form-control-label text-muted">Rendimiento promedio anual por socio/a en kilos/Ha</label>
              <input type="number" class="form-control my-3" v-model="pro_agri.ren_soc">
            </div>
          </div>
        </div>
      </div>
      <div class="pl-lg-4">
        <div class="row">
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Cantidad promedio entregada en kilos anualmente a la Organizacion por socio/a</label>
              <input type="number" class="form-control my-3" v-model="pro_agri.cant_entr">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Cantidad promedio por socio vendida a otros en kilos</label>
              <input type="number" class="form-control my-3" v-model="pro_agri.cant_vend">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Precio promedio cultivo en Bs por kilo (precio pro_agrir)</label>
              <input type="number" class="form-control my-3" v-model="pro_agri.prec_cult">
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
          <div class="col-lg-3">
            <div class="form-group">
              <label class="form-control-label text-muted">Principal cultivo de la ultima campaña</label>
              <input type="text" class="form-control my-3" v-model="pro_agri.pro">
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label class="form-control-label text-muted">Superficie promedio en Hectarea por cultivo</label>
              <input type="number" class="form-control my-3" v-model="pro_agri.sup_cul">
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label class="form-control-label text-muted">Produccion promedio anual en kilos por socio/a</label>
              <input type="number" class="form-control my-3" v-model="pro_agri.pro_soc">
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label class="form-control-label text-muted">Rendimiento promedio anual por socio/a en kilos/Ha</label>
              <input type="number" class="form-control my-3" v-model="pro_agri.ren_soc">
            </div>
          </div>
        </div>
      </div>
      <div class="pl-lg-4">
        <div class="row">
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Cantidad promedio entregada en kilos anualmente a la Organizacion por socio/a</label>
              <input type="number" class="form-control my-3" v-model="pro_agri.cant_entr">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Cantidad promedio por socio vendida a otros en kilos</label>
              <input type="number" class="form-control my-3" v-model="pro_agri.cant_vend">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Precio promedio cultivo en Bs por kilo (precio pro_agrir)</label>
              <input type="number" class="form-control my-3" v-model="pro_agri.prec_cult">
            </div>
          </div>
        </div>
      </div>
      <button class="btn btn-primary" type="submit">Agregar</button>
    </form>
    <hr>
    <h3 class="text-muted">Lista de productos agricolas:</h3>
    <ul class="list-group">
         <li class="list-group-item"
            v-for="(item, index) in pros_agri" :key="index" >

          <div class="pl-lg-4 card bg-dark">
            <div class="row">
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="form-control-label text-muted"><b>Principal Cultivo de la Ultima Campaña</b> </label>
                      <b>{{ item.pro }}</b>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="form-control-label text-muted"><b>Superficie Promedio en Hectarea por Cultivo</b> </label>
                      <!-- <input type="text" class="form-control my-3" v-model="pro_agri.sup_cul"> -->
                      <b>{{ item.sup_cul }}</b>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="form-control-label text-muted"><b>Produccion Promedio Anual en Kilos por Socio/a</b> </label>
                      <!-- <input type="text" class="form-control my-3" v-model="pro_agri.pro_soc"> -->
                      <b>{{ item.pro_soc }}</b>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="form-control-label text-muted"><b>Rendimiento Promedio Anual por Socio/a en Kilos/Ha</b> </label>

                      <b>{{ item.ren_soc }}</b>
                    </div>
                  </div>
                </div>
              </div>
              <div class="pl-lg-4 card bg-dark">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted"><b>Cantidad promedio entregada en kilos anualmente a la AOPEB por socio/a</b> </label>

                      <b>{{ item.cant_entr }}</b>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted"><b>Cantidad Promedio por Socio Vendida a Otros en Kilos</b> </label>
                      <!-- <input type="text" class="form-control my-3" v-model="pro_agri.cant_vend"> -->
                      <b>{{ item.cant_vend }}</b>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label text-muted"><b>Precio Promedio Cultivo en Bs por Kilo (Precio)</b> </label>
                      <!-- <input type="text" class="form-control my-3" v-model="pro_agri.prec_cul"> -->
                      <b>{{ item.prec_cult }}</b>
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
      pros_agri: [],
      modoEditar: false,
      pro_agri: {pro: '',
                sup_cul: '',
                pro_soc: '',
                ren_soc: '',
                cant_entr: '',
                cant_vend: '',
                prec_cult: ''},
      aux : 0
    }
  },
  created(){
    axios.get('/proagri').then(res=>{
      this.pros_agri = res.data;
    })
  },
  methods:{
    agregar(){
      if(this.aux == 0){
        if(this.pro_agri.pro.trim() === '' || this.pro_agri.sup_cul.trim() === ''
            || this.pro_agri.pro_soc.trim() === '' || this.pro_agri.ren_soc.trim() === ''){
          alert('Debes completar todos los campos antes de guardar');
          return;
        }
        const pro_agriNueva = this.pro_agri;
        this.pro_agri = {pro: '',
                        sup_cul: '',
                        pro_soc: '',
                        ren_soc: '',
                        cant_entr: '',
                        cant_vend: '',
                        prec_cult: ''};
        axios.post('/proagri', pro_agriNueva)
          .then((res) =>{
            const pro_agriServidor = res.data;
            this.pros_agri.push(pro_agriServidor);
          })
      }else{
        this.aux = 0;
      }
    },
    editarFormulario(item){
      this.pro_agri.pro = item.pro;
      this.pro_agri.sup_cul = item.sup_cul;
      this.pro_agri.pro_soc = item.pro_soc;
      this.pro_agri.ren_soc = item.ren_soc;
      this.pro_agri.cant_entr = item.cant_entr;
      this.pro_agri.cant_vend = item.cant_vend;
      this.pro_agri.prec_cult = item.prec_cult;
      this.pro_agri.id = item.id;
      this.modoEditar = true;
    },
    editarNota(pro_agri){
      const params = {pro: pro_agri.pro,
                      sup_cul: pro_agri.sup_cul,
                      pro_soc: pro_agri.pro_soc,
                      ren_soc: pro_agri.ren_soc,
                      cant_entr: pro_agri.cant_entr,
                      cant_vend: pro_agri.cant_vend,
                      prec_cult: pro_agri.prec_cult};
      axios.put(`/proagri/${pro_agri.id}`, params)
        .then(res=>{
          this.modoEditar = false;
          const index = this.pros_agri.findIndex(item => item.id === pro_agri.id);
          this.pros_agri[index] = res.data;
          // document.location.reload();
          this.pro_agri = {pro: '',
                          sup_cul: '',
                          pro_soc: '',
                          ren_soc: '',
                          cant_entr: '',
                          cant_vend: '',
                          prec_cult: ''};
        })
    },
    eliminarNota(pro_agri, index){
      const confirmacion = confirm(`Eliminar producto agricola ${pro_agri.nombre}`);
      if(confirmacion){
        axios.delete(`/proagri/${pro_agri.id}`)
          .then(()=>{
            this.pros_agri.splice(index, 1);
          })
      }
    },
    cancelarEdicion(){
      this.modoEditar = false;
      this.pro_agri = {pro: '',
                      sup_cul: '',
                      pro_soc: '',
                      ren_soc: '',
                      cant_entr: '',
                      cant_vend: '',
                      prec_cult: ''};
      this.aux = 1;
    }
  }
}
</script>

<template>
  <div>
    <div class="well">
        <div class="row">
            <div class="col-sm-2">
                <span class="input-group-addon">
                    Cultivo
                </span>
            </div>

            <div class="col-sm-10">
                <input type="text" autocomplete="off" v-model="search" id="search"
                class="form-control input-lg" placeholder="Buscar..." />

                <!-- Vue Search List Start-->
                <ul v-cloak v-if="posts" v-bind:style="{ width : width + 'px' }" class="widget">
                    <li v-for="(post,key) in posts" :id="key + 1"
                        v-bind:class="[(key + 1 == count) ? activeClass : '', menuItem]">
                        <!-- <a v-bind:href="post.url" > -->
                            <div class="list_item_container" v-bind:title="post.pro_nombre" v-on:click="mouseEvento(post)">
                                <div class="image">
                                    <!-- <img v-bind:src="post.pro_imagen" > -->
                                    <!-- <img src="/argon/img/brand/blue.png"> -->
                                    <img v-bind:src="'/argon/img/files/' + post.pro_imagen" >
                                </div>
                                <div class="label">
                                    <h4>__{{ post.pro_nombre  }}</h4>
                                    <h5>__{{ post.pro_descripcion  }}</h5>
                                </div>
                            </div>
                        <!-- </a> -->
                    </li>
                </ul>
                <!-- Vue Search List End-->
            </div>
        </div>
    </div>
    <!-- search box container ends  -->


    <form @submit.prevent="editarNota(pro)" v-if="modoEditar">
      <h3 class="text-muted">Editar producto</h3>
      <div class="pl-lg-4">
        <div class="row">
          <div class="col-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Producto</label>
              <!-- <input type="text" class="form-control my-3" v-model="pro.producto"> -->
              <p class="bg-info"><h2 class="card shadow text-white bg-light pl-3 pr-3"><b>{{pro.producto}}</b> </h2> </p>
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Caracteristicas</label>
              <input type="text" class="form-control my-3" v-model="pro.caracteristicas">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Presentacion comercial</label>
              <input type="text" class="form-control my-3" v-model="pro.prese_com">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Cuantas veces al año produce</label>
              <input type="number" class="form-control my-3" v-model="pro.veces_pro">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Epocas</label>
              <input type="text" class="form-control my-3" v-model="pro.epoca">
            </div>
          </div>
        </div>
      </div>
      <div class="pl-lg-4">
        <div class="row">
          <div class="col-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Volumen de produccion por año</label>
              <input type="number" class="form-control" v-model="pro.vol_pro">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
                <label class="form-control-label text-muted">Unidad de referencia (UR)</label>

                <select v-model="pro.unid_ref" @change="onChange($event)" class="form-control">
                 <option value="kg">Kilogramo</option>
                 <option value="lb">Libras</option>
                 <option value="qq">Quintal</option>
                 <option value="gr">Gramos</option>
                 <option value="ton">Tonelada</option>
                 <option value="onz">Onza</option>
                 <option value="m3">Metro cubico</option>
                 <option value="dm3">Decimetro cubico</option>
                 <option value="cm3">Centimetro cubico</option>
                 <option value="arr">Arroba</option>
                 <option value="uc">Unid Citrico</option>
               </select>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label class="form-control-label text-muted">Equivalencia {{ this.pro.unid_ref }} a (Kilos)</label>
                <p class="text-white">{{pro.equi_ur}} Kg</p>
              </div>
            </div>
          </div>
      </div>
      <div class="pl-lg-4">
        <div class="row">
              <div class="col-4">
                <div class="form-group">
                  <label class="form-control-label text-muted">Cantidad destinada a otros fines (semilla, perdidas) (UR)</label>
                  <input type="number" class="form-control" v-model="pro.vol_dest">
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label class="form-control-label text-muted mb-4">Unidad de referencia (UR)</label>

                  <select v-model="pro.unid_ref2" @change="onChange2($event)" class="form-control">
                   <option value="kg">Kilogramo</option>
                   <option value="lb">Libras</option>
                   <option value="qq">Quintal</option>
                   <option value="gr">Gramos</option>
                   <option value="ton">Tonelada</option>
                   <option value="onz">Onza</option>
                   <option value="m3">Metro cubico</option>
                   <option value="dm3">Decimetro cubico</option>
                   <option value="cm3">Centimetro cubico</option>
                   <option value="arr">Arroba</option>
                   <option value="uc">Unid Citrico</option>
                 </select>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label class="form-control-label text-muted">Equivalencia {{ this.pro.unid_ref2 }} a (Kilos)</label>
                  <p class="text-white"> {{pro.cant_dest}} Kg</p>
                </div>
              </div>
        </div>
      </div>
      <div class="pl-lg-4">
        <div class="row">
              <div class="col-4">
                <div class="form-group">
                  <label class="form-control-label text-muted">Cantidad vendida al mercado (UR)</label>
                  <input type="number" class="form-control" v-model="pro.vol_vend">
                </div>
              </div>

              <div class="col-4">
                <div class="form-group">
                  <label class="form-control-label text-muted">Unidad de referencia (UR)</label>

                  <select v-model="pro.unid_ref3" @change="onChange3($event)" class="form-control">
                   <option value="kg">Kilogramo</option>
                   <option value="lb">Libras</option>
                   <option value="qq">Quintal</option>
                   <option value="gr">Gramos</option>
                   <option value="ton">Tonelada</option>
                   <option value="onz">Onza</option>
                   <option value="m3">Metro cubico</option>
                   <option value="dm3">Decimetro cubico</option>
                   <option value="cm3">Centimetro cubico</option>
                   <option value="arr">Arroba</option>
                   <option value="uc">Unid Citrico</option>
                 </select>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label text-muted">Equivalencia {{ this.pro.unid_ref3 }} a (Kilos)</label>
                  <p class="text-white">{{pro.cant_vend}} Kg</p>
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
              <div class="col-4">
                <div class="form-group">
                  <label class="form-control-label text-muted">Producto</label>
                  <!-- <input type="text" class="form-control my-3" v-model="pro.producto"> -->
                  <p class="bg-info"><h2 class="card shadow text-white bg-dark pl-3 pr-3"><b>{{pro.producto}}</b> </h2> </p>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label class="form-control-label text-muted">Caracteristicas</label>
                  <input type="text" class="form-control my-3" v-model="pro.caracteristicas">
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label class="form-control-label text-muted">Presentacion comercial</label>
                  <input type="text" class="form-control my-3" v-model="pro.prese_com">
                </div>
              </div>
        </div>
        <div class="row">
          <div class="col-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Cuantas veces al año produce</label>
              <input type="number" class="form-control my-3" v-model="pro.veces_pro">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Epocas</label>
              <input type="text" class="form-control my-3" v-model="pro.epoca">
            </div>
          </div>

        </div>
      </div>
      <div class="pl-lg-4">
        <div class="row">
          <div class="col-4">
            <div class="form-group">
              <label class="form-control-label text-muted">Volumen de produccion por año</label>
              <input type="number" class="form-control" v-model="pro.vol_pro">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
                <label class="form-control-label text-muted">Unidad de referencia (UR)</label>

                <select v-model="pro.unid_ref" @change="onChange($event)" class="form-control">
                 <option value="kg">Kilogramo</option>
                 <option value="lb">Libras</option>
                 <option value="qq">Quintal</option>
                 <option value="gr">Gramos</option>
                 <option value="ton">Tonelada</option>
                 <option value="onz">Onza</option>
                 <option value="m3">Metro cubico</option>
                 <option value="dm3">Decimetro cubico</option>
                 <option value="cm3">Centimetro cubico</option>
                 <option value="arr">Arroba</option>
                 <option value="uc">Unid Citrico</option>
               </select>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label class="form-control-label text-muted">Equivalencia {{ this.pro.unid_ref }} a (Kilos)</label>
                <p class="text-white">{{pro.equi_ur}} Kg</p>
              </div>
            </div>
          </div>
      </div>
      <div class="pl-lg-4">
        <div class="row">
              <div class="col-4">
                <div class="form-group">
                  <label class="form-control-label text-muted">Cantidad destinada a otros fines (semilla, perdidas) (UR)</label>
                  <input type="number" class="form-control" v-model="pro.vol_dest">
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label class="form-control-label text-muted mb-4">Unidad de referencia (UR)</label>

                  <select v-model="pro.unid_ref2" @change="onChange2($event)" class="form-control">
                   <option value="kg">Kilogramo</option>
                   <option value="lb">Libras</option>
                   <option value="qq">Quintal</option>
                   <option value="gr">Gramos</option>
                   <option value="ton">Tonelada</option>
                   <option value="onz">Onza</option>
                   <option value="m3">Metro cubico</option>
                   <option value="dm3">Decimetro cubico</option>
                   <option value="cm3">Centimetro cubico</option>
                   <option value="arr">Arroba</option>
                   <option value="uc">Unid Citrico</option>
                 </select>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label class="form-control-label text-muted">Equivalencia {{ this.pro.unid_ref2 }} a (Kilos)</label>
                  <p class="text-white"> {{pro.cant_dest}} Kg</p>
                </div>
              </div>
        </div>
      </div>
      <div class="pl-lg-4">
        <div class="row">
              <div class="col-4">
                <div class="form-group">
                  <label class="form-control-label text-muted">Cantidad vendida al mercado (UR)</label>
                  <input type="number" class="form-control" v-model="pro.vol_vend">
                </div>
              </div>

              <div class="col-4">
                <div class="form-group">
                  <label class="form-control-label text-muted">Unidad de referencia (UR)</label>

                  <select v-model="pro.unid_ref3" @change="onChange3($event)" class="form-control">
                   <option value="kg">Kilogramo</option>
                   <option value="lb">Libras</option>
                   <option value="qq">Quintal</option>
                   <option value="gr">Gramos</option>
                   <option value="ton">Tonelada</option>
                   <option value="onz">Onza</option>
                   <option value="m3">Metro cubico</option>
                   <option value="dm3">Decimetro cubico</option>
                   <option value="cm3">Centimetro cubico</option>
                   <option value="arr">Arroba</option>
                   <option value="uc">Unid Citrico</option>
                 </select>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label text-muted">Equivalencia {{ this.pro.unid_ref3 }} a (Kilos)</label>
                  <p class="text-white">{{pro.cant_vend}} Kg</p>
                </div>
              </div>
        </div>
      </div>
      <button class="btn btn-primary" type="submit">Agregar</button>
    </form>
    <hr>
    <h1 class="text-muted">Productos de la Organizacion</h1>
    <ul class="list-group">
         <li class="list-group-item"
            v-for="(item, index) in lavanderias" :key="index" >
          <!-- <span class="badge badge-primary float-right">
            {{item.updated_at}}
          </span> -->
        <div class="pl-lg-4">
          <div class="row">
                <div class="col-lg-3 bg-dark card">
                  <div class="form-group">
                    <label class="form-control-label text-muted"><b>Producto</b> </label> <br/>
                    {{item.producto}}
                  </div>
                </div>
                <div class="col-lg-3 bg-dark card">
                  <div class="form-group">
                    <label class="form-control-label text-muted"><b>Caracteristicas</b> </label> <br/>
                    {{item.caracteristicas}}
                  </div>
                </div>
                <div class="col-lg-3 bg-dark card">
                  <div class="form-group">
                    <label class="form-control-label text-muted"><b>Presentacion comercial</b> </label> <br/>
                    {{item.prese_com}}
                  </div>
                </div>
                <div class="col-lg-3 bg-dark card">
                  <div class="form-group">
                    <label class="form-control-label text-muted"><b>Produccion Anual</b> </label> <br/>
                    {{item.veces_pro}}
                  </div>
                </div>
          </div>
        </div>

        <div class="pl-lg-4">
          <div class="row">
                <div class="col-lg-3 bg-dark card">
                  <div class="form-group">
                    <label class="form-control-label text-muted">Epocas de Produccion</label><br/>
                    {{item.epoca}}
                  </div>
                </div>
                <div class="col-lg-3 bg-dark card">
                  <div class="form-group">
                    <label class="form-control-label text-muted">Volumen de Produccion por Año en Kg (kilogramos)</label><br/>

                    {{item.equi_ur}} Kg.
                  </div>
                </div>
                <div class="col-lg-3 bg-dark card">
                  <div class="form-group">
                    <label class="form-control-label text-muted">Cantidad Destinada a Otros Fines (Semilla, Perdidas) (UR)</label><br/>
                    {{item.cant_dest}} Kg.
                  </div>
                </div>
                <div class="col-lg-3 bg-dark card">
                  <div class="form-group">
                    <label class="form-control-label text-muted">Cantidad Vendida al Mercado (UR)</label><br/>

                    {{item.cant_vend}} Kg.
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
      lavanderias: [],
      modoEditar: false,
      pro:    {
                producto: '',
                caracteristicas: '',
                prese_com: '',
                veces_pro: 0,
                epoca: '',
                //
                vol_pro: 0,
                unid_ref: '',
                equi_ur: 0,
                //
                vol_dest: 0,
                unid_ref2: '',
                cant_dest: 0,
                //
                vol_vend: 0,
                unid_ref3: '',
                cant_vend: 0
              },

      posts : '',
      search : '',
      count : 0,
      width: 0,
      menuItem : 'menu-item',
      activeClass : 'active',
      aux : 0
    }
  },
  created(){
    axios.get('/producto').then(res=>{
      this.lavanderias = res.data;
    })




  },
  mounted() {
    //do something after mounting vue instance
    self = this;

    // get width of search input for vue search widget on initial load
    this.width = document.getElementById("search").offsetWidth;
    // get width of search input for vue search widget when page resize
    window.addEventListener('resize', function(event){
        self.width = document.getElementById('search').offsetWidth;
    });

    // To clear vue search widget when click on body
    document.body.addEventListener('click',function (e) {
      // if(self.width > 0){
      //     console.log(self.search);
      // }
      // self.pro.producto = self.search;
      self.clearData(e);
    });

    document.getElementById('search').addEventListener('keydown', function(e) {
        // check whether arrow keys are pressed
        if(_.includes([37, 38, 39, 40, 13], e.keyCode) ) {
            if (e.keyCode === 38 || e.keyCode === 40) {
                // To prevent cursor from moving left or right in text input
                e.preventDefault();
            }

            if (e.keyCode === 40 && self.posts == "") {
                // If post list is cleared and search input is not empty
                // then call ajax again on down arrow key press
                self.getPosts();
                return;
            }

            self.selectPost(e.keyCode);

        } else {
            self.getPosts();
        }
    });
  },
  methods:{

    getPosts: _.debounce(function() {
                this.posts = "";
                this.count = 0;
                self = this;

                if (this.search.trim() != '') {
                    axios.post('/demos/vuesearch',{
                        search : self.search
                    })
                   .then(function (response) {
                      self.posts = response.data;
                    })
                   .catch(function (error) {
                        console.log(error);
                    });
                }

            }, 500),
    selectPost: function(keyCode) {
        // If down arrow key is pressed
        if (keyCode == 40 && this.count < this.posts.length) {
            this.count++;
        }
        // If up arrow key is pressed
        if (keyCode == 38 && this.count > 1) {
            this.count--;
        }
        // If enter key is pressed
        if (keyCode == 13) {
            // Go to selected post
            // console.log('presiono enter');
            // self.pro.producto = self.search;
            let a = document.getElementById(this.count).childNodes[0];
            // console.log(a.title);

            var co = 0;
            self.lavanderias.forEach((value, index) => {
                console.log(value.producto);
                // console.log(index);
                if(value.producto === a.title){
                  // alert('el producto ya existe');
                  co ++;
                }
            });
            // console.log(co);
            if(co > 0){
              alert('el producto existe!!');
            }else{
              self.pro.producto = a.title;
            }
            document.getElementById(this.count).childNodes[0].click();
        }
    },
    clearData: function(e) {
        if (e.target.id != 'search') {
            this.posts = '',
            this.count = 0
        }
    },

    onChange(event) {
      // console.log(event.target.value);
      switch (event.target.value) {
        case 'kg':
          this.pro.equi_ur = this.pro.vol_pro;
          break;
        case 'lb':
          this.pro.equi_ur = this.pro.vol_pro * 0.4536;
          break;
        case 'qq':
          this.pro.equi_ur = this.pro.vol_pro * 100;
          break;
        case 'gr':
          this.pro.equi_ur = this.pro.vol_pro * 0.001;
          break;
        case 'ton':
          this.pro.equi_ur = this.pro.vol_pro * 1000;
          break;
        case 'onz':
          this.pro.equi_ur = this.pro.vol_pro * 0.0311035;
          break;
        case 'm3':
          this.pro.equi_ur = this.pro.vol_pro * 1000;
          break;
        case 'dm3':
          this.pro.equi_ur = this.pro.vol_pro;
          break;
        case 'cm3':
          this.pro.equi_ur = this.pro.vol_pro * 0.001;
          break;
        case 'arr':
          this.pro.equi_ur = this.pro.vol_pro * 12.5;
          break;
        case 'uc':
          this.pro.equi_ur = this.pro.vol_pro * 0.25;
          break;
        default:
          break;
      }
    },

    onChange2(event) {
      // console.log(event.target.value);
      switch (event.target.value) {
        case 'kg':
          this.pro.cant_dest = this.pro.vol_dest;
          break;
        case 'lb':
          this.pro.cant_dest = this.pro.vol_dest * 0.4536;
          break;
        case 'qq':
          this.pro.cant_dest = this.pro.vol_dest * 100;
          break;
        case 'gr':
          this.pro.cant_dest = this.pro.vol_dest * 0.001;
          break;
        case 'ton':
          this.pro.cant_dest = this.pro.vol_dest * 1000;
          break;
        case 'onz':
          this.pro.cant_dest = this.pro.vol_dest * 0.0311035;
          break;
        case 'm3':
          this.pro.cant_dest = this.pro.vol_dest * 1000;
          break;
        case 'dm3':
          this.pro.cant_dest = this.pro.vol_dest;
          break;
        case 'cm3':
          this.pro.cant_dest = this.pro.vol_dest * 0.001;
          break;
        case 'arr':
          this.pro.cant_dest = this.pro.vol_dest * 12.5;
          break;
        case 'uc':
          this.pro.cant_dest = this.pro.vol_dest * 0.25;
          break;
        default:
          break;
      }
    },

    onChange3(event) {
      // console.log(event.target.value);
      switch (event.target.value) {
        case 'kg':
          this.pro.cant_vend = this.pro.vol_vend;
          break;
        case 'lb':
          this.pro.cant_vend = this.pro.vol_vend * 0.4536;
          break;
        case 'qq':
          this.pro.cant_vend = this.pro.vol_vend * 100;
          break;
        case 'gr':
          this.pro.cant_vend = this.pro.vol_vend * 0.001;
          break;
        case 'ton':
          this.pro.cant_vend = this.pro.vol_vend * 1000;
          break;
        case 'onz':
          this.pro.cant_vend = this.pro.vol_vend * 0.0311035;
          break;
        case 'm3':
          this.pro.cant_vend = this.pro.vol_vend * 1000;
          break;
        case 'dm3':
          this.pro.cant_vend = this.pro.vol_vend;
          break;
        case 'cm3':
          this.pro.cant_vend = this.pro.vol_vend * 0.001;
          break;
        case 'arr':
          this.pro.cant_vend = this.pro.vol_vend * 12.5;
          break;
        case 'uc':
          this.pro.cant_vend = this.pro.vol_vend * 0.25;
          break;
        default:
          break;
      }
    },

    agregar(){
      if(this.aux == 0){
        if(this.pro.producto.trim() === ''
            // || this.pro.caracteristicas.trim() === ''
            // || this.pro.prese_com.trim() === ''
            // || this.pro.veces_pro.trim() === ''
          ){
          alert('Debes completar todos los campos antes de guardar');
          return;
        }
        const proNueva = this.pro;
        this.pro = {
                      producto: '',
                      caracteristicas: '',
                      prese_com: '',
                      veces_pro: 0,
                      epoca: '',
                      //
                      vol_pro: 0,
                      unid_ref: '',
                      equi_ur: 0,
                      //
                      vol_dest: 0,
                      unid_ref2: '',
                      cant_dest: 0,
                      //
                      vol_vend: 0,
                      unid_ref3: '',
                      cant_vend: 0
                  };
        // alert('producto : ' + this.pro);
        axios.post('/producto', proNueva)
          .then((res) =>{
            const lavanderiaservidor = res.data;
            this.lavanderias.push(lavanderiaservidor);
          })
      }else{
        this.aux = 0;
      }
    },
    editarFormulario(item){
      this.pro.producto = item.producto;
      this.pro.caracteristicas = item.caracteristicas;
      this.pro.prese_com = item.prese_com;
      this.pro.veces_pro = item.veces_pro;
      this.pro.epoca = item.epoca;
      //
      this.pro.vol_pro = item.vol_pro;
      this.pro.unid_ref = item.unid_ref,
      this.pro.equi_ur = item.equi_ur,
      //
      this.pro.vol_dest = item.vol_dest,
      this.pro.unid_ref2 = item.unid_ref2,
      this.pro.cant_dest = item.cant_dest,
      //
      this.pro.vol_vend = item.vol_vend,
      this.pro.unid_ref3 = item.unid_ref2,
      this.pro.cant_vend = item.cant_vend,
      //
      this.pro.id = item.id;
      this.modoEditar = true;
    },
    editarNota(pro){
      const params = {
                      producto: pro.producto,
                      caracteristicas: pro.caracteristicas,
                      prese_com: pro.prese_com,
                      veces_pro: pro.veces_pro,
                      epoca: pro.epoca,
                      //
                      vol_pro: pro.vol_pro,
                      unid_ref: pro.unid_ref,
                      equi_ur: pro.equi_ur,
                      //
                      vol_dest: pro.vol_dest,
                      unid_ref2: pro.unid_ref2,
                      cant_dest: pro.cant_dest,
                      //
                      vol_vend: pro.vol_vend,
                      unid_ref3: pro.unid_ref3,
                      cant_vend: pro.cant_vend
                      };
      axios.put(`/producto/${pro.id}`, params)
        .then(res=>{
          this.modoEditar = false;
          const index = this.lavanderias.findIndex(item => item.id === pro.id);
          this.lavanderias[index] = res.data;
          // document.location.reload();
          this.pro = {
                        producto: '',
                        caracteristicas: '',
                        prese_com: '',
                        veces_pro: 0,
                        epoca: '',
                        //
                        vol_pro: 0,
                        unid_ref: '',
                        equi_ur: 0,
                        //
                        vol_dest: 0,
                        unid_ref2: '',
                        cant_dest: 0,
                        //
                        vol_vend: 0,
                        unid_ref3: '',
                        cant_vend: 0
                    };
        })
    },
    eliminarNota(pro, index){
      const confirmacion = confirm(`Eliminar pro ${pro.nombre}`);
      if(confirmacion){
        axios.delete(`/producto/${pro.id}`)
          .then(()=>{
            this.lavanderias.splice(index, 1);
          })
      }
    },
    cancelarEdicion(){
      this.modoEditar = false;
      this.pro = { producto: '',
                  caracteristicas: '',
                  prese_com: '',
                  veces_pro: 0,
                  epoca: '',
                  //
                  vol_pro: 0,
                  unid_ref: '',
                  equi_ur: 0,
                  //
                  vol_dest: 0,
                  unid_ref2: '',
                  cant_dest: 0,
                  //
                  vol_vend: 0,
                  unid_ref3: '',
                  cant_vend: 0 };
      this.aux = 1;
      // document.location.reload();
    },
    mouseEvento: function (post) {
      // ahora tenemos acceso al evento nativo.
      var co = 0;
      this.lavanderias.forEach((value, index) => {
          console.log(value.producto);
          // console.log(index);
          if(value.producto === post.pro_nombre){
            // alert('el producto ya existe');
            co ++;
          }
      });
      // console.log(co);
      if(co > 0){
        alert('el producto existe!!');
      }else{
        this.pro.producto = post.pro_nombre;
      }
    },
  }
}
</script>



<style>
/* Common for all */
[v-cloak] {
  display: none;
}
.active {
    background-color: #f5f5f5;
}

/* Styling Vue Search Widget - You can customize it as you wish */
.widget {
    border: 1px solid #c5c5c5;
    background: white;
    position: absolute;
    cursor: pointer;
    list-style: none;
    padding: 0;
    z-index: 100;
}
.menu-item{
    height: 80px;
    border: 1px solid #ececf9;
}
.list_item_container {
    width: 98%;
    float: left;
}

.image {
    width: 10%;
    float: left;
    padding: 10px;
}
.image img{
    width: 80px;
    height : 60px;
}
.label{
    width: 89%;
    float:right;
    color: rgb(124,77,255);
    font-weight: bold;
    text-align: left;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
}
@media only screen and (max-width:768px) {

    .image img{
        width: 70px;
        height : 55px;
    }
    .label{
        width: 70%;
    }
    .label h4{
        font-size: 15px;
    }
}

/* To get a indigo focus color in search input - Not nessary */
input[type="text"]:focus{
  border-color: #5b518b !important;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 4px #5b518b !important;
  outline: 0 none;
}

</style>

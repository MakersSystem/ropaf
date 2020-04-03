<template>
  <div>

    <div class="well">
        <div class="row">
            <div class="col-sm-2">

                <span class="input-group-addon"
                style="color: white; background-color: #5b518b; height: 46px">
                    Busca Producto
                </span>
            </div>

            <div class="col-sm-10">
                <input type="text" autocomplete="off" v-model="search" id="search"
                class="form-control input-lg" placeholder="productos.." />


                <ul v-cloak v-if="posts" v-bind:style="{ width : width + 'px' }" class="widget">
                    <li v-for="(post,key) in posts" :id="key +1"
                        v-bind:class="[(key + 1 == count) ? activeClass : '', menuItem]">

                            <div class="list_item_container" v-bind:title="post.pro_nombre" v-on:click="mouseEvento(post)">
                                <div class="image">

                                    <img v-bind:src="'/argon/img/files/' + post.pro_imagen" >
                                </div>
                                <div class="label">
                                    <h4>__{{ post.pro_nombre  }}</h4>
                                    <h5>__{{ post.pro_descripcion  }}</h5>
                                </div>
                            </div>

                    </li>
                </ul>

            </div>
        </div>
    </div>



    <form @submit.prevent="editarNota(producto)" v-if="modoEditar">
      <h3>Editar producto</h3>
      <input type="text" class="form-control mb-2"
        placeholder="Nombre de la producto" v-model="producto.nombre">
      <input type="text" class="form-control mb-2"
        placeholder="Descripción de la producto" v-model="producto.descripcion">
      <button class="btn btn-warning" type="submit">Editar</button>
      <button class="btn btn-danger" type="submit"
        @click="cancelarEdicion">Cancelar</button>
    </form>
    <form @submit.prevent="agregar" v-else>
      <!-- <h3>Agregar producto</h3> -->
      <!-- <input type="text" class="form-control mb-2"
        placeholder="Nombre de la producto" v-model="producto.nombre">
      <input type="text" class="form-control mb-2"
        placeholder="Descripción de la producto" v-model="producto.descripcion"> -->
        <div class="pl-lg-4">
        <div class="row">
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label text-muted">Producto</label>
                  <!-- <input type="text" class="form-control my-3" v-model="producto.producto"> -->
                  <p class="text-white">{{producto.producto}}</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label text-muted">Finca (rescatista)</label>
                  <input type="text" class="form-control my-3" v-model="producto.finca_resc">
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label text-muted">Centro acopio comprador</label>
                  <input type="text" class="form-control my-3" v-model="producto.centr_comp">
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label text-muted">Ferias</label>
                  <input type="text" class="form-control my-3" v-model="producto.feria">
                </div>
              </div>

        </div>
      </div>
      <div class="pl-lg-4">
        <div class="row">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label text-muted">Mercados</label>
                  <input type="text" class="form-control my-3" v-model="producto.mercado">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label text-muted">Tiendas</label>
                  <input type="text" class="form-control my-3" v-model="producto.tienda">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label text-muted">Otros</label>
                  <input type="text" class="form-control my-3" v-model="producto.otro">
                </div>
              </div>
        </div>
      </div>
      <button class="btn btn-primary" type="submit">Agregar</button>
    </form>
    <hr>
    <h3 class="text-muted">Lista de productos Comercializados:</h3>
    <ul class="list-group">
         <li class="list-group-item"
            v-for="(item, index) in productos" :key="index" >
          <span class="badge badge-primary float-right">
            {{item.updated_at}}
          </span>
          <div class="pl-lg-4">
          <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <label class="form-control-label text-muted">Producto</label>
                    <!-- <input type="text" class="form-control my-3" v-model="producto.producto"> -->
                    {{item.producto}}
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label class="form-control-label text-muted">Finca rescatista</label>
                    <!-- <input type="text" class="form-control my-3" v-model="producto.caracterisitcas"> -->
                    {{item.finca_resc}}
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="form-group">
                    <label class="form-control-label text-muted">Centro acopio comprador</label>
                    <!-- <input type="text" class="form-control my-3" v-model="producto.prese_com"> -->
                    {{item.centr_comp}}
                  </div>
                </div>
          </div>
        </div>
        <div class="pl-lg-4">
          <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <label class="form-control-label text-muted">Feria</label>
                    <!-- <input type="text" class="form-control my-3" v-model="producto.vol_pro"> -->
                    {{item.feria}}
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label class="form-control-label text-muted">Mercado</label>
                    <!-- <input type="text" class="form-control my-3" v-model="producto.unid_ref"> -->
                    {{item.mercado}}
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label class="form-control-label text-muted">Tienda</label>
                    <!-- <input type="text" class="form-control my-3" v-model="producto.equi_ur"> -->
                    {{item.tienda}}
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label class="form-control-label text-muted">Otro</label>
                    <!-- <input type="text" class="form-control my-3" v-model="producto.cant_dest"> -->
                    {{item.otro}}
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
      productos: [],
      modoEditar: false,
      producto: {
                producto: '',
                finca_resc: 0,
                centr_comp: 0,
                feria: 0,
                mercado: 0,
                tienda: 0,
                otro: 0
              },
      posts : '',
      search : '',
      count : 0,
      width: 0,
      menuItem : 'menu-item',
      activeClass : 'active'
    }
  },
  created(){
    axios.get('/produven').then(res=>{
      this.productos = res.data;
    })
  },
  mounted() {

    self = this;


    this.width = document.getElementById("search").offsetWidth;

    window.addEventListener('resize', function(event){
        self.width = document.getElementById('search').offsetWidth;
    });


    document.body.addEventListener('click',function (e) {

      self.clearData(e);
    });

    document.getElementById('search').addEventListener('keydown', function(e) {

        if(_.includes([37, 38, 39, 40, 13], e.keyCode) ) {
            if (e.keyCode === 38 || e.keyCode === 40) {

                e.preventDefault();
            }

            if (e.keyCode === 40 && self.posts == "") {

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
                    axios.post('/demos/vuesearch2',{
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
            self.producto.producto = a.title;
            document.getElementById(this.count).childNodes[0].click();
        }
    },
    clearData: function(e) {
        if (e.target.id != 'search') {
            this.posts = '',
            this.count = 0
        }
    },

    agregar(){
      if(this.producto.producto.trim() === ''
          // || this.producto.caracterisitcas.trim() === ''
          // || this.producto.prese_com.trim() === ''
          // || this.producto.veces_pro.trim() === ''
        ){
        alert('Debes completar todos los campos antes de guardar');
        return;
      }
      const productoNueva = this.producto;
      this.producto = {
                      producto: '',
                      finca_resc: 0,
                      centr_comp: 0,
                      feria: 0,
                      mercado: 0,
                      tienda: 0,
                      otro: 0
                    };
      axios.post('/produven', productoNueva)
        .then((res) =>{
          const productoServidor = res.data;
          this.productos.push(productoServidor);
        })
    },
    editarFormulario(item){
      this.producto.nombre = item.nombre;
      this.producto.descripcion = item.descripcion;
      this.producto.id = item.id;
      this.modoEditar = true;
    },
    editarNota(producto){
      const params = {nombre: producto.nombre, descripcion: producto.descripcion};
      axios.put(`/produven/${producto.id}`, params)
        .then(res=>{
          this.modoEditar = false;
          const index = this.productos.findIndex(item => item.id === producto.id);
          this.productos[index] = res.data;
        })
    },
    eliminarNota(producto, index){
      const confirmacion = confirm(`Eliminar producto ${producto.nombre}`);
      if(confirmacion){
        axios.delete(`/produven/${producto.id}`)
          .then(()=>{
            this.productos.splice(index, 1);
          })
      }
    },
    cancelarEdicion(){
      this.modoEditar = false;
      this.producto = {nombre: '', descripcion: ''};
    },
    mouseEvento: function (post) {
      console.log(post.pro_nombre);
      // ahora tenemos acceso al evento nativo.
      var co = 0;
      this.productos.forEach((value, index) => {
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
        this.producto.producto = post.pro_nombre;
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


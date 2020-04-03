<template>
  <div class="container">
    <!-- buscador input  -->
    <div class="well">
        <div class="row">           
            <div class="col-12">
                <input type="text" autocomplete="off" v-model="search" id="search"
                class="form-control input-lg" placeholder="Ingresar el Nombre del Producto Ejemplo: Cebolla" />
                <!-- Vue lista del buscador iniciando -->
                <ul v-cloak v-if="posts" v-bind:style="{ width : width + 'px' }" class="widget">
                    <li v-for="(post,key) in posts" :id="key +1"
                        v-bind:class="[(key + 1 == count) ? activeClass : '', menuItem]">
                        <!-- <a v-bind:href="post.url" > -->
                            <div class="list_item_container" v-bind:title="post.pro_nombre" v-on:click="mouseEvento(post)">
                                <div class="image">
                                    <!-- <img v-bind:src="post.pro_imagen" > -->
                                    <!-- <img src="/argon/img/brand/blue.png"> -->
                                    <img v-bind:src="'/argon/img/files/' + post.pro_imagen" >
                                </div>
                                <div class="label">
                                    <h4>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{ post.pro_nombre }}</h4>
                                    <h5>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{ post.pro_descripcion }}</h5>
                                </div>
                            </div>
                        <!-- </a> -->
                    </li>
                </ul>
                <!--fin de Vue lista de buscador-->
            </div>
        </div>
    </div>
    <!-- <h1 class="text-muted">Productos de la Organizacion</h1> -->
    <div>{{this.titulo}}</div>
    <ul class="list-group mt-3">
          <li class="list-group-item">
           <div class="pl-4 pr-4">
             <div class="row">
                   <div class="col-lg-6 bg-dark">
                     <div class="form-group">
                       <label class="form-control-label text-white"><b>{{this.nombre}}</b> </label>
                     </div>
                   </div>
                   <div class="col-lg-6 bg-dark">
                     <div class="form-group">
                       <label class="form-control-label text-white"><b>{{this.ubicacion}}</b> </label>
                     </div>
                   </div>
             </div>
           </div>
         </li>
         <li class="list-group-item"
            v-for="(item, index) in organizaciones" :key="index" >
          <div class="pl-lg-4">
            <div class="row">
                  <div class="col-lg-6 card">
                    <div class="form-group">
                      <!-- <label class="form-control-label text-muted"><b>Nombre</b> </label> <br/> -->
                      {{item.nombre}}
                    </div>
                  </div>
                  <div class="col-lg-6 bg-blue card">
                    <div class="form-group">
                      <!-- <label class="form-control-label text-muted"><b>Departamento</b> </label> <br/> -->
                      {{item.departamento}}
                    </div>
                  </div>
            </div>
          </div>
        </li>
    </ul>
    <!-- search box container ends  -->
  </div>
</template>

<script>
export default {
  data() {
    return {
      organizaciones: [],
      posts : '',
      search : '',
      count : 0,
      width: 0,
      menuItem : 'menu-item',
      activeClass : 'active',
      search2 : '',
      titulo: '',
      nombre: '',
      ubicacion: ''
    }
  },
  created(){

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
            self.pro.producto = a.title;
            document.getElementById(this.count).childNodes[0].click();
        }
    },
    clearData: function(e) {
        if (e.target.id != 'search') {
            this.posts = '',
            this.count = 0
        }
    },

    mouseEvento: function (post) {
      // ahora tenemos acceso al evento nativo.
        // console.log(post.pro_nombre);
          axios.post('buspro',{
              search2 : post.pro_nombre
          })
         .then(function (response) {
            self.organizaciones = response.data;
            self.titulo = 'Resultados para :' + post.pro_nombre;
            self.search = post.pro_nombre;
            self.nombre = 'ORGANIZACION';
            self.ubicacion = 'UBICACION';
          })
         .catch(function (error) {
              console.log(error);
          });
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
    height: 100px;
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

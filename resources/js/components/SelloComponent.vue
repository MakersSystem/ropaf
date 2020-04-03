<template>
  <div class="row" >
    <div class="col-lg-4">
      <div class="form-group">
        <label class="form-control-label text-muted" for="input-first-name">Certificacion</label>
        <div class="mb-4">
          <select class="form-control" name = "certi_orga" v-model="primeraOpcion">
            <option v-for="(item, index) in list"> {{ index }} </option>
          </select>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label class="form-control-label text-white" for="input-last-name">Tipo</label>
        <div class="mb-4">          
          <select class="form-control" name = "sello_seg" v-model="segundaOpcion" v-if="primeraOpcion">            
            <option v-for=" (item, index) in list[primeraOpcion]"> {{ item }} </option>
          </select>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      notas: [],
      modoEditar: false,
      nota: {nombre: '', descripcion: ''},
      primeraOpcion: null,
      segundaOpcion: null,
      // list: {
      //   'lp' : [{provincia : 'LP1', municipio : ['LP11', 'LP12', 'LP13', 'LP14']}, {provincia : 'LP2', municipio : ['LP21', 'LP22', 'LP23', 'LP24']}, {provincia : 'LP3', municipio : ['LP31', 'LP32', 'LP33', 'LP34']}, {provincia : 'LP4', municipio : ['LP41', 'LP42', 'LP43', 'LP44']}],
      //   'or' : [{provincia : 'OR1', municipio : ['OR11', 'OR12', 'OR13', 'OR14']}, {provincia : 'OR2', municipio : ['OR21', 'OR22', 'OR23', 'OR24']}, {provincia : 'OR3', municipio : ['OR31', 'OR32', 'OR33', 'OR34']}, {provincia : 'OR4', municipio : ['OR41', 'OR42', 'OR43', 'OR44']}],
      //   'po' : [{provincia : 'PO1', municipio : ['PO11', 'PO12', 'PO13', 'PO14']}, {provincia : 'PO2', municipio : ['PO21', 'PO22', 'PO23', 'PO24']}, {provincia : 'PO3', municipio : ['PO31', 'PO32', 'PO33', 'PO34']}, {provicnia : 'PO4', municipio : ['PO41', 'PO42', 'PO43', 'PO44']}],
      //   'co' : [{provincia : 'CO1', municipio : ['CO11', 'CO12', 'CO13', 'CO14']}, {provincia : 'CO2', municipio : ['CO21', 'CO22', 'CO23', 'CO24']}, {provincia : 'CO3', municipio : ['CO31', 'CO32', 'CO33', 'CO34']}, {provincia : 'CO4', municipio : ['CO41', 'CO42', 'CO43', 'CO44']}]
      // },

      list: {
        'TRANSICION' : ['ECOLOGICA'],
        'ORGANICO' : ['FAIR TRADE', 'USDA ORGANIC', 'JAS']
      },
    }
  },
  created(){
    // axios.get('/notas').then(res=>{
    //   this.notas = res.data;
    // })
  },
  methods:{

    cambio: function(){
      console.log(this.segundaOpcion);
      alert(this.segundaOpcion);
    },



  }
}
</script>

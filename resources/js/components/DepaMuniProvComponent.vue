<template>
  <div class="row" >
    <div class="ml-3 col-3">
      <div class="form-group">
        <label class="form-control-label text-muted" for="input-first-name">Departamento</label>
        <div class="mb-4">          
          <select class="form-control" name = "departamento" v-model="primeraOpcion">            
            <option v-for="(item, index) in list"> {{ index }} </option>
          </select>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label class="form-control-label text-muted" for="input-last-name">Provincia</label>
        <div class="mb-4">
          <!-- <input class="form-control" placeholder="--Seleccionar--" type="text">
          <div class="input-group-append">
            <span class="input-group-text"><i class="ni ni-bold-down"></i></span>
          </div> -->
          <select class="form-control" name = "provincia" v-model="segundaOpcion" v-if="primeraOpcion" title="--Seleccionar--">
            <option v-for=" (item, index) in list[primeraOpcion]"> {{ item }} </option>
          </select>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label class="form-control-label text-muted" for="input-last-name">Municipio</label>
        <div class="mb-4">
          <!-- <input class="form-control" placeholder="--Seleccionar--" type="text">
          <div class="input-group-append">
            <span class="input-group-text"><i class="ni ni-bold-down"></i></span>
          </div> -->
          <select class="form-control" name = "municipio" v-model="terceraOpcion" v-if="segundaOpcion">
            <option v-for="item in list2[segundaOpcion]"> {{ item }} </option>
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
      terceraOpcion: null,
      // list: {
      //   'lp' : [{provincia : 'LP1', municipio : ['LP11', 'LP12', 'LP13', 'LP14']}, {provincia : 'LP2', municipio : ['LP21', 'LP22', 'LP23', 'LP24']}, {provincia : 'LP3', municipio : ['LP31', 'LP32', 'LP33', 'LP34']}, {provincia : 'LP4', municipio : ['LP41', 'LP42', 'LP43', 'LP44']}],
      //   'or' : [{provincia : 'OR1', municipio : ['OR11', 'OR12', 'OR13', 'OR14']}, {provincia : 'OR2', municipio : ['OR21', 'OR22', 'OR23', 'OR24']}, {provincia : 'OR3', municipio : ['OR31', 'OR32', 'OR33', 'OR34']}, {provincia : 'OR4', municipio : ['OR41', 'OR42', 'OR43', 'OR44']}],
      //   'po' : [{provincia : 'PO1', municipio : ['PO11', 'PO12', 'PO13', 'PO14']}, {provincia : 'PO2', municipio : ['PO21', 'PO22', 'PO23', 'PO24']}, {provincia : 'PO3', municipio : ['PO31', 'PO32', 'PO33', 'PO34']}, {provicnia : 'PO4', municipio : ['PO41', 'PO42', 'PO43', 'PO44']}],
      //   'co' : [{provincia : 'CO1', municipio : ['CO11', 'CO12', 'CO13', 'CO14']}, {provincia : 'CO2', municipio : ['CO21', 'CO22', 'CO23', 'CO24']}, {provincia : 'CO3', municipio : ['CO31', 'CO32', 'CO33', 'CO34']}, {provincia : 'CO4', municipio : ['CO41', 'CO42', 'CO43', 'CO44']}]
      // },

      list: {
        'La Paz' : ['Abel Iturralde', 'Aroma', 'Bautista Saavedra', 'Camacho', 'Caranavi', 'Franz Tamayo', 'Gualberto Villarroel', 'Ingavi', 'Inquisivi', 'Jose Manuel Pando', 'Larecaja', 'Loayza', 'Los Andes', 'Manco Kapac', 'Muñecas', 'Murillo', 'Nor Yungas', 'Omasuyos', 'Pacajes', 'Sud Yungas'],
        'Oruro' : ['Atahuallpa', 'Carangas', 'Cercado Oruro', 'Eduardo Abaroa', 'Ladislao Cabrera', 'Litoral', 'Nor Carangas', 'Pantaleón Dalence', 'Poopo', 'Puerto de Mejillones', 'Sajama', 'San Pedro de Totora', 'Saucarí', 'Sebastián Pagador', 'Sud Carangas', 'Tomás Barrón'],
        'Potosi' : ['Alonso de Ibáñez', 'Antonio Quijarro', 'Bernardino Bilbao', 'Charcas', 'Chayanta', 'Cornelio Saavedra', 'Daniel Campos', 'Enrique Baldivieso', 'José María Linares', 'Modesto Omiste', 'Nor Lipez', 'Nor Chichas', 'Rafael Bustillo', 'Sud Chichas', 'Sud Lipez', 'Tomás Frias'],
        'Cochabamba' : ['Arani', 'Arque', 'Ayopaya', 'Bolívar', 'Campero', 'Capinota', 'Carrasco', 'Cercado Cbba', 'Chapare', 'Esteban Arce', 'Germán Jordán', 'Mizque', 'Punata', 'Quillacollo', 'Tapacarí', 'Tiraque'],
        'Santa Cruz' : ['Andres Ibañez', 'Angel Sandoval', 'Chiquitos', 'Cordillera', 'Florida', 'German Busch', 'Guarayos', 'Ichilo', 'Jose Miguel de Velasco', 'Manuel Maria Caballero', 'Ñuflo de Chavez', 'Obispo Santisteban', 'Sara', 'Vallegrande', 'Warnes'],
        'Beni':['Cercado Beni','Antonio Vaca Díez','General José Ballivián Segurola', 'Yacuma', 'Mojos', 'Marbán', 'Mamoré', 'Iténez'],
        'Pando': ['Abuná','Federico Román','Madre de Dios', 'Manuripi', 'Nicolás Suárez'],
        'Chuquisaca': ['Oropeza', 'Juana Azurduy', 'Jaime Zudáñez', 'Tomina', 'Hernando Siles', 'Yamparáez', 'Nor Cinti', 'Sud Cinti','Belisario Boeto', 'Luis Calvo'],
        'Tarija': ['Aniceto Arce', 'Burdet OConnor', 'Cercado Tarija', 'Eustaquio Méndez', 'Gran Chaco', 'José María Avilés'],
      },

      list2: {
        // La Paz
        'Abel Iturralde' : ['Ixiamas', 'San Buenaventura'],
        'Aroma' : ['Sica Sica', 'Ayo Ayo', 'Calamarca', 'Collana', 'Colquencha', 'Patacamaya', 'Umala'],
        'Bautista Saavedra' : ['Charazani', 'Curva'],
        'Camacho' : ['Puerto Acosta', 'Mocomoco', 'Puerto Carabuco', 'Escoma', 'Humanata'],
        'Caranavi' : ['Caranavi', 'Alto Beni'],
        'Franz Tamayo' : ['Apolo', 'Pelechuco'],
        'Gualberto Villarroel' : ['San Pedro de Curahuara', 'Chacarilla', 'Papel Pampa'],
        'Ingavi' : ['Viacha', 'Andres de Machaca', 'Desaguadero', 'Guaqui', 'Jesus de Machaca', 'Taraco', 'Tiahuanaco'],
        'Inquisivi' : ['Inquisivi', 'Cajuata', 'Colquiri', 'Ichoca', 'Licona Pamapa', 'Quime'],
        'Jose Manuel Pando' : ['Santiago de Machaca', 'Catacora'],
        'Larecaja' : ['Sorata', 'Combaya', 'Guanay', 'Mapiri', 'Quiabaya', 'Tacacoma', 'Teoponte', 'Tipuani'],
        'Loayza' : ['Luribay', 'Cairoma', 'Malla', 'Sapahaqui', 'Yaco'],
        'Los Andes' : ['Pucarani', 'Batallas', 'Laja', 'Puerto Perez'],
        'Manco Kapac' : ['Copacabana', 'San Pedro de Tiquina', 'Tito Yupanqui'],
        'Muñecas' : ['Chuma', 'Aucapata', 'Ayata'],
        'Murillo' : ['Palca', 'Achocalla', 'El Alto', 'La Paz', 'Mecapaca'],
        'Nor Yungas' : ['Coroico', 'Coripata'],
        'Omasuyos' : ['Achacachi', 'Ancoraimes', 'Chua Cocani', 'Huarina', 'Huatajata', 'Santiago de Huata'],
        'Pacajes' : ['Coro Coro', 'Calacoto', 'Caquiaviri', 'Charaña', 'Comanche', 'Nazacara de Pacajes', 'Santiago de Callapa', 'Waldo Ballivian'],
        'Sud Yungas' : ['Chulumani', 'Irupana', 'La Asunta', 'Palos Blancos', 'Yanacachi'],
        // --------------------------------------------------------------------------
        // Oruro
        'Atahuallpa' : ['Sabaya', 'Chipaya', 'Coipasa'],
        'Carangas' : ['Corque', 'Choquecota'],
        'Cercado Oruro' : ['Oruro', 'Caracollo', 'El Choro', 'Soracachi'],
        'Eduardo Abaroa' : ['Challapata', 'Santuario de Quillacas'],
        'Ladislao Cabrera' : ['Salinas de Garci Mendoza', 'Pampa Aullagas'],
        'Litoral' : ['Huachacalla', 'Cruz de Machacamarca' , 'Escara, Esmeralda', 'Yunguyo del Litoral'],
        'Nor Carangas' : ['Santiago de Huayllamarca'],
        'Pantaleón Dalence' : ['Villa Huanuni', 'Machacamarca'],
        'Poopo' : ['Villa Poopo', 'Antequera', 'Pazña'],
        'Puerto de Mejillones' : ['La Rivera', 'Carangas', 'Todos Santos'],
        'Sajama' : ['Curahuara de Carangas', 'Turco'],
        'San Pedro de Totora' : ['Totora'],
        'Saucarí' : ['Toledo'],
        'Sebastián Pagador' : ['Santiago de Huari'],
        'Sud Carangas' : ['Andamarca', 'Belén de Andamarca'],
        'Tomás Barrón' : ['Eucaliptus'],
        // --------------------------------------------------------------------------
        // Potosi
        'Alonso de Ibáñez' : ['Sacaca', 'Caripuyo'],
        'Antonio Quijarro' : ['Uyuni', 'Porco', 'Tomave'],
        'Bernardino Bilbao' : ['Arampampa', 'Acasio'],
        'Charcas' : ['San Pedro de Buena Vista', 'Toro Toro'],
        'Chayanta' : ['Colquechaca', 'Ocurí', 'Pocoata'],
        'Cornelio Saavedra' : ['Betanzos', 'Chaqui', 'Tacobamba'],
        'Daniel Campos' : ['Llica', 'Tahua'],
        'Enrique Baldivieso' : ['San Agustín'],
        'José María Linares': ['Puna', 'Caiza', 'Ckochas'],
        'Modesto Omiste' : ['Villazon'],
        'Nor Lipez' : ['Colcha', 'San Pedro de Quemes'],
        'Nor Chichas' : ['Cotagaita', 'Vitichi'],
        'Rafael Bustillo' : ['Uncía', 'Chayanta', 'Llallagua', 'Chuquiuta'],
        'Sud Chichas' : ['Tupiza', 'Atocha'],
        'Sud Lipez' : ['San Pablo de Lipez', 'Mojinete', 'San Antonio de Esmoruco'],
        'Tomás Frias' : ['Potosi', 'Belen de Urmiri', 'Tinguipaya', 'Villa de Yocalla'],
        // --------------------------------------------------------------------------
        // Cochabamba
        'Arani' : ['Arani', 'Vacas'],
        'Arque' : ['Arque', 'Tacopaya'],
        'Ayopaya' : ['Independencia', 'Morochata', 'Cocapata'],
        'Bolívar' : ['Bolívar'],
        'Campero' : ['Aiquile', 'Omereque', 'Pasorapa'],
        'Capinota' : ['Capinota', 'Santiváñez', 'Sicaya'],
        'Carrasco' : ['Totora', 'Chimore', 'Entre Ríos', 'Pocona', 'Pojo', 'Puerto Villarroel'],
        'Cercado Cbba' : ['Cochabamba'],
        'Chapare' : ['Sacaba', 'Colomi', 'Villa Tunari'],
        'Esteban Arce' : ['Tarata', 'Anzaldo', 'Arbieto', 'Sacabamba'],
        'Germán Jordán' : ['Cliza', 'Toco', 'Tolata'],
        'Mizque' : ['Mizque', 'Alalay', 'Vila Vila'],
        'Punata' : ['Punata', 'Cuchumuela', 'San Benito', 'Tacachi', 'Villa Rivero'],
        'Quillacollo': ['Quillacollo', 'Colcapirhua', 'Sipe Sipe', 'Tiquipaya', 'Vinto'],
        'Tapacarí' : ['Tapacarí'],
        'Tiraque' : ['Tiraque', 'Shinahota'],
        // --------------------------------------------------------------------------
        // Santa Cruz
        'Andres Ibañez' : ['Santa Cruz de la Sierra', 'Cotoca', 'El Torno', 'La Guardia', 'Porongo '],
        'Angel Sandoval' : ['San Matías'],
        'Chiquitos' : ['San Jose de Chiquitos', 'Pailon', 'Robore'],
        'Cordillera' : ['Lagunillas', 'Boyuibe', 'Cabezas', 'Camiri', 'Charagua', 'Cuevo', 'Gutierrez'],
        'Florida' : ['Samaipata', 'Mairana', 'Pampagrande', 'Quirusillas'],
        'German Busch': ['Puerto Suarez', 'Carmen Rivero Torrez', 'Puerto Quijarro'],
        'Guarayos': ['Ascension de Guarayos', 'El Puente', 'Urubicha'],
        'Ichilo' : ['Buena Vista', 'San Carlos', 'San Juan de Yapacani', 'Yapacani'],
        'Jose Miguel de Velasco' : ['San Ignacio de Velasco', 'San Miguel de Velasco', 'San Rafael de Velasco'],
        'Manuel Maria Caballero' : ['Comarapa', 'Saipina'],
        'Ñuflo de Chavez' : ['Concepcion', 'Cuatro Cañadas', 'San Antonio del Lomerio', 'San Julian', 'San Ramon', 'San Xavier'],
        'Obispo Santisteban' : ['Montero', 'General Agustin Saavedra', 'Minero', 'Fernandez Alonso', 'San Pedro'],
        'Sara' : ['Portachuelo', 'Colpa Belgica', 'Santa Rosa del Sara'],
        'Vallegrande' : ['Vallegrande', 'El Trigal', 'Moro Moro', 'Postrervalle', 'Pucara'],
        'Warnes' : ['Warnes', 'Okinawa'],
        // ---------------------------------------------------------------------------
        //BENI
        'Cercado Beni':['Trinidad','San Javier'],
        'Antonio Vaca Díez': ['Riberalta','Guayaramerín'],
        'General José Ballivián Segurola': ['Santos Reyes', 'San Borja', 'Santa Rosa', 'Rurrenabaque'],
        'Yacuma': ['Santa Ana del Yacuma', 'Exaltación'],
        'Mojos': ['San Ignacio de Moxos'],
        'Marbán': ['Nuestra Señora de Loreto', 'San Andrés'],
        'Mamoré': ['San Joaquín', 'San Ramón', 'Puerto Siles'],
        'Iténez': ['Nuestra Señora de Magdalena', 'Baures', 'Huacaraje'],
        // ---------------------------------------------------------------------------
        //PANDO
        'Abuná': ['Santa Rosa del Abuná','Ingavi'],
        'Federico Román': ['Nueva Esperanza', 'Villa Nueva (Loma Alta)', 'Santos Mercado'],
        'Madre de Dios': ['Puerto Gonzalo Moreno', 'San Lorenzo', 'Sena'],
        'Manuripi': ['Puerto Rico', 'San Pedro', 'Filadelfia'],
        'Nicolás Suárez': ['Cobija', 'Porvenir', 'Bolpebra', 'Bella Flor'],
        // ---------------------------------------------------------------------------
        //CHUQUISACA
        'Oropeza': ['Sucre', 'Yotala', 'Poroma'],
        'Juana Azurduy': ['Azurduy', 'Tarvita'],
        'Jaime Zudáñez': ['Zudañez', 'Presto', 'Mojocoya', 'Icla'],
        'Tomina': ['Padilla','Tomina', 'Sopachuy', 'Villa Alcalá', 'El Villar'],
        'Hernando Siles': ['Monteagudo', 'Huacareta'],
        'Yamparáez': ['Tarabuco', 'Yamparáez'],
        'Nor Cinti': ['Camargo', 'San Lucas', 'Incahuasi', 'Villa Charcas'],
        'Sud Cinti': ['Villa Abecia', 'Culpina', 'Las Carreras'],
        'Belisario Boeto': ['Villa Serrano'],
        'Luis Calvo': ['Villa Vaca Guzmán', 'Huacaya', 'Macharetí'],
        // ---------------------------------------------------------------------------
        //TARIJA
        'Aniceto Arce': ['Bermejo', 'Padcaya'],
        'Burdet OConnor': ['Entre Ríos'],
        'Cercado Tarija': ['Tarija'],
        'Eustaquio Méndez': ['San Lorenzo', 'El Puente'],
        'Gran Chaco': ['Caraparí', 'Villamontes', 'Yacuiba'],
        'José María Avilés': ['Uriondo', 'Yunchará'],
      }
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

    obtenerProvincias(index){
      // console.log("entro a obtenerProvincias");
      // switch (index) {
      //   case 1:
      //     this.datos = ['LP1', 'LP2', 'LP3', 'LP4'];
      //     break;
      //   case 2:
      //     this.datos = ['OR1', 'OR2', 'OR3', 'OR4'];
      //     break;
      //   case 3:
      //     this.datos = ['PO1', 'PO2', 'PO3', 'PO4'];
      //     break;
      //   case 4:
      //     this.datos = ['CO1', 'CO2', 'CO3', 'CO4'];
      //     break;
      // }
    },
    obtenerMunicipios(index){
      // switch (index) {
      //   case 1:
      //     datos2 = ['LP11', 'LP12', 'LP13', 'LP14'];
      //     break;
      //   case 2:
      //     datos2 = ['LP21', 'LP22', 'LP23', 'LP24'];
      //     break;
      //   case 3:
      //     datos2 = ['LP31', 'LP32', 'LP33', 'LP34'];
      //     break;
      //   case 4:
      //     datos2 = ['LP41', 'LP42', 'LP43', 'LP44'];
      //     break;
      //
      //   case 5:
      //     datos2 = ['OR11', 'OR12', 'OR13', 'OR14'];
      //     break;
      //   case 6:
      //     datos2 = ['OR21', 'OR22', 'OR23', 'OR24'];
      //     break;
      //   case 7:
      //     datos2 = ['OR31', 'OR32', 'OR33', 'OR34'];
      //     break;
      //   case 8:
      //     datos2 = ['OR41', 'OR42', 'OR43', 'OR44'];
      //     break;
      //
      //   case 9:
      //     datos2 = ['PO11', 'PO12', 'PO13', 'PO14'];
      //     break;
      //   case 10:
      //     datos2 = ['PO21', 'PO22', 'PO23', 'PO24'];
      //     break;
      //   case 11:
      //     datos2 = ['PO31', 'PO32', 'PO33', 'PO34'];
      //     break;
      //   case 12:
      //     datos2 = ['PO41', 'PO42', 'PO43', 'PO44'];
      //     break;
      //
      //   case 13:
      //     datos2 = ['CO11', 'CO12', 'CO13', 'CO14'];
      //     break;
      //   case 14:
      //     datos2 = ['CO21', 'CO22', 'CO23', 'CO24'];
      //     break;
      //   case 15:
      //     datos2 = ['CO31', 'CO32', 'CO33', 'CO34'];
      //     break;
      //   case 16:
      //     datos2 = ['CO41', 'CO42', 'CO43', 'CO44'];
      //     break;
      // }
    }
  }
}
</script>

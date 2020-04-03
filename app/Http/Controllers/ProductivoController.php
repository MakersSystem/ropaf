<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Productivo;
use App\Acti_orga;
use App\Rubro_prin;
use App\Origen_prod;
use DB;

class ProductivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $id = $request->session()->get('key');
        $productivo = DB::table('productivo')->where('id_user',$id)->first();
        $acti_orga = DB::table('acti_orga')->where('id_user', $id)->first();
        $rubro_prin = DB::table('rubro_prin')->where('id_user', $id)->first();
        $origen_prod = DB::table('origen_prod')->where('id_user', $id)->first();
        // echo $acti_orga;
        if($productivo && $acti_orga && $rubro_prin && $origen_prod){
          return view('content/productivo/index', ["productivo" => $productivo, 'acti_orga' => $acti_orga,
                                                    'rubro_prin' => $rubro_prin, 'origen_prod' => $origen_prod]);
        }else{
          return view('content/productivo/present');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('content/productivo/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $productivo = new Productivo;
        $id = $request->session()->get('key');
        $productivo->id_user = $id;
        $productivo->acti_prin_orga = $request->get('acti_prin_orga');
        $productivo->actividades_ingre = $request->get('actividades_ingre');
        $productivo->save();

        $acti_orga = new Acti_orga;
        $acti_orga->id_user = $id;
        $acti_orga->tuberculos = $request->get('tuberculos');
        $acti_orga->cafetaleros = $request->get('cafetaleros');
        $acti_orga->save();

        $rubro_prin = new Rubro_prin;
        $rubro_prin->id_user = $id;
        $rubro_prin->agricola = $request->get('agricola');
        $rubro_prin->pecuario = $request->get('pecuario');
        $rubro_prin->psicola = $request->get('psicola');
        $rubro_prin->avicola = $request->get('avicola');
        $rubro_prin->forestal = $request->get('forestal');
        $rubro_prin->save();


        $origen_prod = new Origen_prod;
        $origen_prod->id_user = $id;
        $origen_prod->tradicional = $request->get('tradicional');
        $origen_prod->convencional = $request->get('convencional');
        $origen_prod->agroindustrial = $request->get('agroindustrial');
        $origen_prod->trad_tran = $request->get('trad_tran');
        $origen_prod->ecologico = $request->get('ecologico');
        $origen_prod->save();

        return \Redirect::to('daprodu/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $productivo = DB::table('productivo')->where('id_user',$id)->first();
      $acti_orga = DB::table('acti_orga')->where('id_user', $id)->first();
      $rubro_prin = DB::table('rubro_prin')->where('id_user', $id)->first();
      $origen_prod = DB::table('origen_prod')->where('id_user', $id)->first();

      // echo $id;
      return view('content/productivo/edit', compact('productivo'), ['acti_orga' => $acti_orga,
                                                'rubro_prin' => $rubro_prin, 'origen_prod' => $origen_prod]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      Productivo::where('id_user',$id)->update(['acti_prin_orga' => $request->get('acti_prin_orga'),
                                                  'actividades_ingre' => $request->get('actividades_ingre')]);

      // Acti_orga::where('id_user', $id)->update(['tuberculos' => 'no',
      //                                             'cafetaleros' => 'no']);
      // Rubro_prin::where('id_user', $id)->update(['agricola' => 'no',
      //                                             'pecuario' => 'no',
      //                                             'psicola' => 'no',
      //                                             'avicola' => 'no',
      //                                             'forestal' => 'no']);
      // Origen_prod::where('id_user', $id)->update(['tradicional' => 'no',
      //                                             'convencional' => 'no',
      //                                             'agroindustrial' => 'no',
      //                                             'trad_tran' => 'no',
      //                                             'ecologico' => 'no']);

      Acti_orga::where('id_user', $id)->update(['tuberculos' => $request->get('tuberculos'),
                                                  'cafetaleros' => $request->get('cafetaleros')]);
      Rubro_prin::where('id_user', $id)->update(['agricola' => $request->get('agricola'),
                                                  'pecuario' => $request->get('pecuario'),
                                                  'psicola' => $request->get('psicola'),
                                                  'avicola' => $request->get('avicola'),
                                                  'forestal' => $request->get('forestal')]);
      Origen_prod::where('id_user', $id)->update(['tradicional' => $request->get('tradicional'),
                                                  'convencional' => $request->get('convencional'),
                                                  'agroindustrial' => $request->get('agroindustrial'),
                                                  'trad_tran' => $request->get('trad_tran'),
                                                  'ecologico' => $request->get('ecologico')]);

      $productivo = DB::table('productivo')->where('id_user',$id)->first();
      $acti_orga = DB::table('acti_orga')->where('id_user', $id)->first();
      $rubro_prin = DB::table('rubro_prin')->where('id_user', $id)->first();
      $origen_prod = DB::table('origen_prod')->where('id_user', $id)->first();
      // $acti_orga->update(['tuberculos' => 'no', 'cafetaleros' => 'no']);

      // $rubro_prin->agricola = 'no';
      // $rubro_prin->pecuario = 'no';
      // $rubro_prin->psicola = 'no';
      // $rubro_prin->avicola = 'no';
      // $rubro_prin->forestal = 'no';
      //
      // $rubro_prin->update();
      //
      // $origen_prod->tradicional = 'no';
      // $origen_prod->convencional = 'no';
      // $origen_prod->agroindustrial = 'no';
      // $origen_prod->trad_tran = 'no';
      // $origen_prod->ecologico = 'no';
      //
      // $origen_prod->update();

      // Organizacion::where('id', '=', $id)->update($datosOrganizacion);

      return view('content/productivo/index', ["productivo" => $productivo, 'acti_orga' => $acti_orga,
                                                'rubro_prin' => $rubro_prin, 'origen_prod' => $origen_prod]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Representacion;
use App\Proble_repre2;
use DB;

class RepresentacionController extends Controller
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
        // echo $id;
        $representacion = DB::table('representacion')->where('id_user', $id)->first();
        if($representacion){
          return view('content/representacion/index', ["representacion" => $representacion]);
        }else{
          return view('content/representacion/present');
        }
        // return view('content/representacion/index', ["representacion" => $representacion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('content/representacion/create');
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
        $Representacion = new Representacion;
        $id = $request->session()->get('key');
        $Representacion->id_user = $id;
        $nombre_presi = strtoupper($request->get('nombre_presi'));
        $Representacion->nombre_presi = $nombre_presi;
        $Representacion->telefono_presi = $request->get('telefono_presi');
        $correo_presi = strtolower($request->get('correo_presi'));
        $Representacion->correo_presi = $correo_presi;
        if(!$request->get('nombre_presi')){
          $proble_repre2 = new Proble_repre2;
          $proble_repre2->descripcion = 'NO SE CUENTA CON PRESIDENTE';
          $proble_repre2->codigo = 'rep1';
          $proble_repre2->id_user = $id;
          $proble_repre2->save();
        }


        $nombre_vicep = strtoupper($request->get('nombre_vicep'));
        $Representacion->nombre_vicep = $nombre_vicep;
        $Representacion->telefono_vicep = $request->get('telefono_vicep');
        $correo_vicep = strtolower($request->get('correo_vicep'));
        $Representacion->correo_vicep = $correo_vicep;
        if(!$request->get('nombre_vicep')){
          $proble_repre2 = new Proble_repre2;
          $proble_repre2->descripcion = 'NO SE CUENTA CON VICEPRESIDENTE';
          $proble_repre2->codigo = 'rep2';
          $proble_repre2->id_user = $id;
          $proble_repre2->save();
        }


        $nombre_geren = strtoupper($request->get('nombre_geren'));
        $Representacion->nombre_geren = $nombre_geren;
        $Representacion->telefono_geren = $request->get('telefono_geren');
        $correo_geren = strtolower($request->get('correo_geren'));
        $Representacion->correo_geren = $correo_geren;
        if(!$request->get('nombre_geren')){
          $proble_repre2 = new Proble_repre2;
          $proble_repre2->descripcion = 'NO SE CUENTA CON GERENTE';
          $proble_repre2->codigo = 'rep3';
          $proble_repre2->id_user = $id;
          $proble_repre2->save();
        }


        $Representacion->nro_var_tra = $request->get('nro_var_tra');
        $Representacion->nro_muj_tra = $request->get('nro_muj_tra');
        if($Representacion->nro_var_tra && $Representacion->nro_muj_tra){
          $calculo = $Representacion->nro_var_tra / $Representacion->nro_muj_tra;
          if($calculo < 0.5){
            $proble_repre2 = new Proble_repre2;
            $proble_repre2->descripcion = 'POCA PARTICIPACION DE VARONES';
            $proble_repre2->codigo = 'rep4';
            $proble_repre2->id_user = $id;
            $proble_repre2->save();
          }else{
            if($calculo > 2){
              $proble_repre2 = new Proble_repre2;
              $proble_repre2->descripcion = 'POCA PARTICIPACION DE MUJERES';
              $proble_repre2->codigo = 'rep5';
              $proble_repre2->id_user = $id;
              $proble_repre2->save();
            }
          }
        }

        $Representacion->nro_pers_perm = $request->get('nro_pers_perm');
        $Representacion->nro_pers_even = $request->get('nro_pers_even');
        $Representacion->nro_jove = $request->get('nro_jove');
        $Representacion->socios_son = $request->get('socios_son');

        $Representacion->nro_var_soc = $request->get('nro_var_soc');
        $Representacion->nro_muj_soc = $request->get('nro_muj_soc');

        if($Representacion->nro_var_soc && $Representacion->nro_muj_soc){
          $calculo2 = $Representacion->nro_var_soc / $Representacion->nro_muj_soc;
          if($calculo2 < 0.5){
            $proble_repre2 = new Proble_repre2;
            $proble_repre2->descripcion = 'POCA PARTICIPACION DE SOCIOS VARONES';
            $proble_repre2->codigo = 'rep6';
            $proble_repre2->id_user = $id;
            $proble_repre2->save();
          }else{
            if($calculo2 > 2){
              $proble_repre2 = new Proble_repre2;
              $proble_repre2->descripcion = 'POCA PARTICIPACION DE SOCIAS MUJERES';
              $proble_repre2->codigo = 'rep7';
              $proble_repre2->id_user = $id;
              $proble_repre2->save();
            }
          }
        }

        $Representacion->nro_pro_mie = $request->get('nro_pro_mie');
        $Representacion->tot_bene = $request->get('tot_bene');

        $Representacion->nro_var_dir = $request->get('nro_var_dir');
        $Representacion->nro_muj_dir = $request->get('nro_muj_dir');
        $Representacion->save();

        return \Redirect::to('representacion/');
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
      $representacion = Representacion::findOrFail($id);
      return view('content/representacion/edit', compact('representacion'));
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
      $pro_rep1 = DB::table('proble_repre2')->where('id_user',$id)->where('codigo','rep1')->first();
      if(!$request->get('nombre_presi')){
        if(!$pro_rep1){
          $proble_repre2 = new Proble_repre2;
          $proble_repre2->descripcion = 'no se cuenta con presidente';
          $proble_repre2->codigo = 'rep1';
          $proble_repre2->id_user = $id;
          $proble_repre2->save();
        }
      }else{
        if($pro_rep1){
          Proble_repre2::where('id_user',$id)->where('codigo','rep1')->delete();
        }
      }

      $pro_rep2 = DB::table('proble_repre2')->where('id_user', $id)->where('codigo', 'rep2')->first();
      if(!$request->get('nombre_vicep')){
        if(!$pro_rep2){
          $proble_repre2 = new Proble_repre2;
          $proble_repre2->descripcion = 'no se cuenta con vicepresidente';
          $proble_repre2->codigo = 'rep2';
          $proble_repre2->id_user = $id;
          $proble_repre2->save();
        }
      }else{
        if($pro_rep2){
          Proble_repre2::where('id_user',$id)->where('codigo','rep2')->delete();
        }
      }

      $pro_rep3 = DB::table('proble_repre2')->where('id_user', $id)->where('codigo', 'rep3')->first();
      if(!$request->get('nombre_geren')){
        if(!$pro_rep3){
          $proble_repre2 = new Proble_repre2;
          $proble_repre2->descripcion = 'no se cuenta con gerente';
          $proble_repre2->codigo = 'rep3';
          $proble_repre2->id_user = $id;
          $proble_repre2->save();
        }
      }else{
        if($pro_rep3){
          Proble_repre2::where('id_user',$id)->where('codigo','rep3')->delete();
        }
      }

      if($request->get('nro_var_tra') && $request->get('nro_muj_tra')){
        $calculo = $request->get('nro_var_tra') / $request->get('nro_muj_tra');
        $pro_rep4 = DB::table('proble_repre2')->where('id_user', $id)->where('codigo', 'rep4')->first();
        $pro_rep5 = DB::table('proble_repre2')->where('id_user', $id)->where('codigo', 'rep5')->first();
        if($calculo < 0.5){
          if(!$pro_rep4){
            $proble_repre2 = new Proble_repre2;
            $proble_repre2->descripcion = 'poca participacion de varones';
            $proble_repre2->codigo = 'rep4';
            $proble_repre2->id_user = $id;
            $proble_repre2->save();
            if($pro_rep5){
              Proble_repre2::where('id_user',$id)->where('codigo','rep5')->delete();
            }
          }
        }else{
          if($calculo > 2){
            if(!$pro_rep5){
              $proble_repre2 = new Proble_repre2;
              $proble_repre2->descripcion = 'poca participacion de mujeres';
              $proble_repre2->codigo = 'rep5';
              $proble_repre2->id_user = $id;
              $proble_repre2->save();
              if($pro_rep4){
                Proble_repre2::where('id_user',$id)->where('codigo','rep4')->delete();
              }
            }
          }else{
            if($pro_rep4){
              Proble_repre2::where('id_user',$id)->where('codigo','rep4')->delete();
            }
            if($pro_rep5){
              Proble_repre2::where('id_user',$id)->where('codigo','rep5')->delete();
            }
          }
        }
      }

      if($request->get('nro_var_soc') && $request->get('nro_muj_soc')){
        $calculo = $request->get('nro_var_soc') / $request->get('nro_muj_soc');
        $pro_rep6 = DB::table('proble_repre2')->where('id_user', $id)->where('codigo', 'rep6')->first();
        $pro_rep7 = DB::table('proble_repre2')->where('id_user', $id)->where('codigo', 'rep7')->first();
        if($calculo < 0.5){
          if(!$pro_rep6){
            $proble_repre2 = new Proble_repre2;
            $proble_repre2->descripcion = 'poca participacion de socios varones';
            $proble_repre2->codigo = 'rep6';
            $proble_repre2->id_user = $id;
            $proble_repre2->save();
            if($pro_rep7){
              Proble_repre2::where('id_user',$id)->where('codigo','rep7')->delete();
            }
          }
        }else{
          if($calculo > 2){
            if(!$pro_rep7){
              $proble_repre2 = new Proble_repre2;
              $proble_repre2->descripcion = 'poca participacion de socias mujeres';
              $proble_repre2->codigo = 'rep7';
              $proble_repre2->id_user = $id;
              $proble_repre2->save();
              if($pro_rep6){
                Proble_repre2::where('id_user',$id)->where('codigo','rep6')->delete();
              }
            }
          }else{
            if($pro_rep6){
              Proble_repre2::where('id_user',$id)->where('codigo','rep6')->delete();
            }
            if($pro_rep7){
              Proble_repre2::where('id_user',$id)->where('codigo','rep7')->delete();
            }
          }
        }
      }




      // Representacion::where('id_user',$id)->update(['acti_prin_orga' => $request->get('acti_prin_orga'),
      //                                             'actividades_ingre' => $request->get('actividades_ingre')]);

      $datosRepresentacion = request()->except(['_token','_method']);
      Representacion::where('id_user', $id)->update($datosRepresentacion);

      $representacion = Representacion::where('id_user',$id)->first();
      return view('content/representacion/index', compact('representacion'));
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

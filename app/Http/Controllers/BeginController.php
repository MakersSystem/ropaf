<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organizacion;
use App\ProductoFinal;
use DB;
use App;
use App\Charts\ConjuntoOrganizaciones;

class BeginController extends Controller
{
    public function index(){
      $lp = DB::table('organizacion')->where('departamento','La Paz')->count();
      $or = DB::table('organizacion')->where('departamento','Oruro')->count();
      $po = DB::table('organizacion')->where('departamento','Potosi')->count();
      $cb = DB::table('organizacion')->where('departamento','Cochabamba')->count();
      $ch = DB::table('organizacion')->where('departamento','Chuquisaca')->count();
      $ta = DB::table('organizacion')->where('departamento','Tarija')->count();
      $pa = DB::table('organizacion')->where('departamento','Pando')->count();
      $be = DB::table('organizacion')->where('departamento','Beni')->count();
      $sc = DB::table('organizacion')->where('departamento','Santa Cruz')->count();

      $total = DB::table('organizacion')->count();

      $organ = App\Organizacion::all();

      $departamentos = [$lp, $or, $po, $cb, $ch, $ta, $pa, $be, $sc];
      $maximo = max($departamentos);

      $total_pro = DB::table('producto_final')->count();

      return view('auth.login', ['total'=>$total, 'total_pro' => $total_pro], ['departamentos'=>$departamentos,'organ'=>$organ, 'maximo'=>$maximo]);
    }

    public function busca(Request $request){
      $organizaciones = DB::table('producto as pr')->where('producto',$request->search2)
                            ->join('organizacion as or','or.id_user','=','pr.id_user')
                            ->select('or.nombre','or.departamento')->get();
      // return Organizacion::All();
      return $organizaciones;
    }
}

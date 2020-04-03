<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductoFinal;
use App\Organizacion;
use App\User;
use DB;
use App\Charts\ListaProblemas;
use App\Charts\ConjuntoOrganizaciones;
use Yajra\Datatables\Datatables;
use App\producto;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //envia los el numero de problemas a la vista home
        $pro_orga = DB::table('proble_orga')->count() + DB::table('proble_orga2')->count();
        $pro_admi = DB::table('proble_admi')->count() + DB::table('proble_admi2')->count();
        $pro_repre = DB::table('proble_repre')->count() + DB::table('proble_repre2')->count();
        $pro_prod = DB::table('proble_pro')->count();

        $orga = DB::table('organizacion')->count();

        $orgs = DB::table('producto as pr')->where('producto')
                            ->join('organizacion as or','or.id_user','=','pr.id_user')
                            ->select('or.nombre','or.departamento')->get();                            

        $problemas = [15-round($pro_orga / $orga, 0, PHP_ROUND_HALF_UP),
                      15-round($pro_admi / $orga, 0, PHP_ROUND_HALF_UP),
                      15-round($pro_repre / $orga, 0, PHP_ROUND_HALF_UP),
                      15-round($pro_prod / $orga, 0, PHP_ROUND_HALF_UP)];



        $lp = DB::table('organizacion')->where('departamento','La Paz')->count();
        $or = DB::table('organizacion')->where('departamento','Oruro')->count();
        $po = DB::table('organizacion')->where('departamento','Potosi')->count();
        $co = DB::table('organizacion')->where('departamento','Cochabamba')->count();
        $ch = DB::table('organizacion')->where('departamento','Chuquisaca')->count();
        $ta = DB::table('organizacion')->where('departamento','Tarija')->count();
        $pa = DB::table('organizacion')->where('departamento','Pando')->count();
        $be = DB::table('organizacion')->where('departamento','Beni')->count();
        $sc = DB::table('organizacion')->where('departamento','Santa Cruz')->count();

        $departamentos = [$lp, $or, $po, $co, $ch, $ta, $pa, $be, $sc];

        // $chart = new ListaProblemas;
        // $chart->labels(['Organizacional', 'Administrativo', 'Representacion', 'Produccion']);
        // $chart->dataset('conjunto de problemas', 'radar', [round($pro_orga / $orga, 0, PHP_ROUND_HALF_UP),
        //                                                   round($pro_admi / $orga, 0, PHP_ROUND_HALF_UP),
        //                                                   round($pro_repre / $orga, 0, PHP_ROUND_HALF_UP),
        //                                                   round($pro_prod / $orga, 0, PHP_ROUND_HALF_UP)])
        // ->backgroundColor([
  			// 	'rgba(105, 0, 132, .2)',
  			// ])
        // ->options([
        //   'responsive' => true,
        //   'borderColor' => [
    		// 		'rgba(200, 99, 132, .7)',
    		// 	],
    		// 	'borderWidth'=> 2,
        // ]);
        // $chart->dataset('My dataset 2', 'radar', [4, 3, 2, 1]);

        //cuenta las asociaciones del pais por departamento
        // $lp = DB::table('organizacion')->where('departamento','La Paz')->count();
        // $or = DB::table('organizacion')->where('departamento','Oruro')->count();
        // $po = DB::table('organizacion')->where('departamento','Potosi')->count();
        // $co = DB::table('organizacion')->where('departamento','Cochabamba')->count();
        // $ch = DB::table('organizacion')->where('departamento','Chuquisaca')->count();
        // $ta = DB::table('organizacion')->where('departamento','Tarija')->count();
        // $pa = DB::table('organizacion')->where('departamento','Pando')->count();
        // $be = DB::table('organizacion')->where('departamento','Beni')->count();
        // $sc = DB::table('organizacion')->where('departamento','Santa Cruz')->count();
        // $chart2 = new ConjuntoOrganizaciones;
        // $chart2->labels(['LP', 'OR', 'PO', 'CBBA', 'CHQS', 'TA', 'PA', 'BE', 'SC']);
        // $chart2->dataset('Lista de organizaciones', 'horizontalBar',[$lp, $or, $po, $co, $ch, $ta, $pa, $be, $sc])
        // ->fill(false)
        // ->backgroundColor([
        //   "rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)",
        //   "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)",
        //   "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)","rgba(98, 16, 23, 0.2)","rgba(31, 16, 23, 0.2)",
        // ])
        // ->options([
        //   'responsive' => true,
        //   'aspectRatio' => 1,
        //   "borderWidth" => 1,
        //   'borderColor' => ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)",
        //   "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)", "rgb(201, 203, 207)", "rgb(98, 16, 23)","rgb(31, 16, 23)"
        //   ],
        //   'tooltips' => ['enabled'=>false],
        //   'legend' => ['display' => false],
        //   'scales' => [
        //       'yAxes'=> [[
        //                   'display'=>false,
        //                   'ticks'=> ['beginAtZero'=> true],
        //                   'gridLines'=> ['display'=> false],
        //                 ]],
        //       'xAxes'=> [[
        //                   'categoryPercentage'=> 0.55,
        //                   'barThickness' => 100,
        //                   'barPercentage' => 0.5,
        //                   'ticks' => ['beginAtZero' => true],
        //                   'gridLines' => ['display' => false],
        //                 ]],
        //   ],
        // ]);

        $productos = ProductoFinal::all();
        $organizacion = Organizacion::all();
        $user = User::all();
        return view('home', compact('departamentos'), ['problemas'=>$problemas,'orgs'=>$orgs])
                          ->with('productos', $productos)
                          ->with('organizacion', $organizacion)
                          ->with('user', $user);
        //return view('home', ['nro_orga' => $pro_orga, 'nro_admi' => $pro_admi, 'nro_repre' => $pro_repre, 'pro_prod' => $pro_prod]);
    }

    public function saveId(Request $request, $id){
       //do stuffs here with $prisw and $secsw
       // echo $id;
       // return view('home');
       $request->session()->put('key', $id);
       return view('layouts.user');
    }

    public function principal(Request $request){
      $id = $request->session()->get('key');
      $pro_orga = DB::table('proble_orga')->where('id_user', $id)->count();
      $pro_admi = DB::table('proble_admi')->where('id_user', $id)->count();
      $pro_repre = DB::table('proble_repre')->where('id_user', $id)->count();

      $pro_orga2 = DB::table('proble_orga2')->where('id_user', $id)->count();
      $pro_admi2 = DB::table('proble_admi2')->where('id_user', $id)->count();
      $pro_repre2 = DB::table('proble_repre2')->where('id_user', $id)->count();

      $pro_prod = DB::table('proble_pro')->where('id_user', $id)->count();
      $problemas = [15 - ($pro_orga + $pro_orga2),
                    15 - ($pro_admi + $pro_admi2),
                    15 - ($pro_repre + $pro_repre2),
                    15 - $pro_prod];
      // $problemas = [10,12,10,13];
      // $organizacion = DB::table('organizacion')->where('id', $id)->get();
      $organizacion = DB::table('organizacion')->where('id_user', 'LIKE', '%'.$id.'%')->first();

      //$consultaproducto = DB::table('organizacion')->where('id_user', 'LIKE', '%'.$id.'%')->first();
      // if(!$organizacion){
      //   echo 'no existe';
      // }
      return view('content.principal', compact('problemas'), ['organizacion' => $organizacion]);
    }
}

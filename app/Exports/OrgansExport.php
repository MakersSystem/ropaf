<?php

namespace App\Exports;

// use App\Organizacion;
// use App\Representacion;

use DB;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;



class OrgansExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
      //envia los el numero de problemas a la vista home
      $pro_orga = DB::table('proble_orga')->count();
      $pro_admi = DB::table('proble_admi')->count();
      $pro_repre = DB::table('proble_repre')->count();
      $pro_prod = DB::table('proble_pro')->count();

      $lp = DB::table('organizacion')->where('departamento','La Paz')->count();
      $or = DB::table('organizacion')->where('departamento','Oruro')->count();
      $po = DB::table('organizacion')->where('departamento','Potosi')->count();
      $co = DB::table('organizacion')->where('departamento','Cochabamba')->count();
      $ch = DB::table('organizacion')->where('departamento','Chuquisaca')->count();
      $ta = DB::table('organizacion')->where('departamento','Tarija')->count();
      $pa = DB::table('organizacion')->where('departamento','Pando')->count();
      $be = DB::table('organizacion')->where('departamento','Beni')->count();
      $sc = DB::table('organizacion')->where('departamento','Santa Cruz')->count();

      return view('content.repoOrgans', [
                  'pro_orga' => $pro_orga,
                  'pro_admi' => $pro_admi,
                  'pro_repre' => $pro_repre,
                  'pro_prod' => $pro_prod,

                  'lp' => $lp,
                  'or' => $or,
                  'po' => $po,
                  'co' => $co,
                  'ch' => $ch,
                  'ta' => $ta,
                  'pa' => $pa,
                  'be' => $be,
                  'sc' => $sc
                ]);
    }
}

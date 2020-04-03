<?php

namespace App\Exports;

// use App\Organizacion;
// use App\Representacion;

use DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class OrganizacionExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $id = auth()->id();//ojo con esto
        $organizacion = DB::table('organizacion')->where('id_user', 'LIKE', '%'.$id.'%')->first();

        $representacion = DB::table('representacion')->where('id_user', 'LIKE', '%'.$id.'%')->first();
        $pros_repre = DB::table('proble_repre')->where('id_user', $id)->get();

        $organizacionales = DB::table('organizacionales')->where('id_user', 'LIKE', '%'.$id.'%')->first();
        $pros_orga = DB::table('proble_orga')->where('id_user', $id)->get();

        $administrativo = DB::table('administrativo')->where('id_user', 'LIKE', '%'.$id.'%')->first();
        $pros_admi = DB::table('proble_admi')->where('id_user', $id)->get();

        $productivo = DB::table('productivo')->where('id_user', 'LIKE', '%'.$id.'%')->first();
        $productos = DB::table('producto')->where('id_user', $id)->get();
        $productos_vend = DB::table('producto_vend')->where('id_user', $id)->get();

        $produ_eco = DB::table('produ_eco')->where('id_user', 'LIKE', '%'.$id.'%')->first();

        $mercado = DB::table('mercado')->where('id_user', 'LIKE', '%'.$id.'%')->first();


        $beneficio = DB::table('beneficio')->where('id_user', 'LIKE', '%'.$id.'%')->first();
        $bene_lider = DB::table('bene_lider')->where('id_user', 'LIKE', '%'.$id.'%')->first();

        return view('content.repoOrganizacion', [
          'organizacion' => $organizacion,
          'representacion' => $representacion,
          'pros_repre' => $pros_repre,
          'organizacionales' => $organizacionales,
          'pros_orga' => $pros_orga,
          'administrativo' => $administrativo,
          'pros_admi' => $pros_admi,
          'productivo' => $productivo,
          'productos' => $productos,
          'productos_vend' => $productos_vend,
          'produ_eco' => $produ_eco,
          'mercado' => $mercado,
          'beneficio' => $beneficio,
          'bene_lider' => $bene_lider
        ]);
    }
}

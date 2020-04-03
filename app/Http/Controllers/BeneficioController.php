<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Beneficio;
use App\Bene_lider;
use DB;

class BeneficioController extends Controller
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
        $beneficio = DB::table('beneficio')->where('id_user', $id)->first();
        $bene_lider = DB::table('bene_lider')->where('id_user', $id)->first();
        if($beneficio && $bene_lider){
          return view('content/beneficio/index', ["beneficio" => $beneficio, "bene_lider" => $bene_lider]);
        }else{
          return view('content/beneficio/present');
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
        return view('content/beneficio/create');
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
        $beneficio = new Beneficio();
        $beneficio->cant_muj = $request->cant_muj;
        $beneficio->cant_var = $request->cant_var;
        $beneficio->espe = $request->espe;
        $beneficio->pro_eco = $request->pro_eco;
        $id = $request->session()->get('key');
        $beneficio->id_user = $id;
        $beneficio->save();

        $bene_lid = new Bene_lider;
        $bene_lid->id_user = $id;
        $bene_lid->gob_mun = $request->get('gob_mun');
        $bene_lid->org_sim = $request->get('org_sim');
        $bene_lid->ong = $request->get('ong');
        $bene_lid->gob_dep = $request->get('gob_dep');
        $bene_lid->lid_org = $request->get('lid_org');
        $bene_lid->otro = $request->get('otro');
        $bene_lid->save();

        return \Redirect::to('beneficio/');
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
      $beneficio = DB::table('beneficio')->where('id_user', $id)->first();
      $bene_lider = DB::table('bene_lider')->where('id_user', $id)->first();
      return view('content/beneficio/edit', ["beneficio" => $beneficio, "bene_lider" => $bene_lider]);
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
      Beneficio::where('id_user',$id)->update(['cant_muj' => $request->get('cant_muj'),
                                                'cant_var' => $request->get('cant_var'),
                                                'espe' => $request->get('espe'),
                                                'pro_eco' => $request->get('pro_eco')]);

      Bene_lider::where('id_user',$id)->update(['gob_mun' => $request->get('gob_mun'),
                                                'org_sim' => $request->get('org_sim'),
                                                'ong' => $request->get('ong'),
                                                'gob_dep' => $request->get('gob_dep'),
                                                'lid_org' => $request->get('lid_org'),
                                                'otro' => $request->get('otro')]);

      $beneficio = DB::table('beneficio')->where('id_user', $id)->first();
      $bene_lider = DB::table('bene_lider')->where('id_user', $id)->first();

      return view('content/beneficio/index', ["beneficio" => $beneficio, "bene_lider" => $bene_lider]);

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

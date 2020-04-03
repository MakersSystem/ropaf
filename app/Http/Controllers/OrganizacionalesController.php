<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Organizacionales;
use DB;
use App\Proble_orga2;

class OrganizacionalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->session()->get('key');
        // echo $id;

        //
        // $id = $request->session()->get('id_user');
        $organizacionales = DB::table('organizacionales')->where('id_user', 'LIKE', '%'.$id.'%')->first();
        if($organizacionales){
          return view('content/organizacionales/index', ["organizacionales" => $organizacionales]);
        }else{
          return view('content/organizacionales/present');
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
        return view('content/organizacionales/create');
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
        $organizacionales = new Organizacionales;
        $id = $request->session()->get('key');
        $organizacionales->id_user = $id;
        $organizacionales->fech_funda = $request->get('fech_funda');
        $organizacionales->anio_afili = $request->get('anio_afili');



        $organizacionales->perso_juri = $request->get('perso_juri');
        if($request->get('perso_juri') == 'no'){
          $proble_orga2 = new Proble_orga2;
          $proble_orga2->descripcion = 'no se cuenta con personeria juridica';
          $proble_orga2->codigo = 'org1';
          $proble_orga2->id_user = $id;
          $proble_orga2->save();
        }

        //$organizacionales->organi = $request->get('organi');
        if($request->hasFile('organi')){
          $file = $request->file('organi');
          $name = time().$file->getClientOriginalName();
          $organizacionales->organi = $name;
          $file->move(public_path().'/pdf/organigrama/',$name);
        }else{
          $proble_orga2 = new Proble_orga2;
          $proble_orga2->descripcion = 'no se cuenta con organigrama';
          $proble_orga2->codigo = 'org2';
          $proble_orga2->id_user = $id;
          $proble_orga2->save();
        }


        //$organizacionales->esta_regl = $request->get('esta_regl');
        if($request->hasFile('esta_regl')){
          $file = $request->file('esta_regl');
          $name = time().$file->getClientOriginalName();
          $organizacionales->esta_regl = $name;
          $file->move(public_path().'/pdf/estatutos_reglamentos/',$name);
        }else{
          $proble_orga2 = new Proble_orga2;
          $proble_orga2->descripcion = 'no se cuenta con estatuos y reglamentos internos';
          $proble_orga2->codigo = 'org3';
          $proble_orga2->id_user = $id;
          $proble_orga2->save();
        }


        $organizacionales->manu_func = $request->get('manu_func');
        if($request->get('manu_func') == 'no'){
          $proble_orga2 = new Proble_orga2;
          $proble_orga2->descripcion = 'no se cuenta con manual de funciones';
          $proble_orga2->codigo = 'org4';
          $proble_orga2->id_user = $id;
          $proble_orga2->save();
        }


        //$organizacionales->nit = $request->get('nit');
        if($request->hasFile('nit')){
          $file = $request->file('nit');
          $name = time().$file->getClientOriginalName();
          $organizacionales->nit = $name;
          $file->move(public_path().'/pdf/nit/',$name);
        }else{
          $proble_orga2 = new Proble_orga2;
          $proble_orga2->descripcion = 'no se cuenta con nit';
          $proble_orga2->codigo = 'org5';
          $proble_orga2->id_user = $id;
          $proble_orga2->save();
        }


        $organizacionales->rau = $request->get('rau');
        if($request->get('rau') == 'no'){
          $proble_orga2 = new Proble_orga2;
          $proble_orga2->descripcion = 'no se cuenta con rau';
          $proble_orga2->codigo = 'org6';
          $proble_orga2->id_user = $id;
          $proble_orga2->save();
        }


        //$organizacionales->fund_empr = $request->get('fund_empr');
        if($request->hasFile('fund_empr')){
          $file = $request->file('fund_empr');
          $name = time().$file->getClientOriginalName();
          $organizacionales->fund_empr = $name;
          $file->move(public_path().'/pdf/funda_empresas/',$name);
        }else{
          $proble_orga2 = new Proble_orga2;
          $proble_orga2->descripcion = 'no se cuenta con funda empresas';
          $proble_orga2->codigo = 'org7';
          $proble_orga2->id_user = $id;
          $proble_orga2->save();
        }

        $organizacionales->targ_empr = $request->get('targ_empr');
        if($request->get('targ_empr') == 'no'){
          $proble_orga2 = new Proble_orga2;
          $proble_orga2->descripcion = 'no se cuenta con targeta empresarial';
          $proble_orga2->codigo = 'org8';
          $proble_orga2->id_user = $id;
          $proble_orga2->save();
        }

        $organizacionales->regi_sani = $request->get('regi_sani');
        if($request->get('regi_sani') == 'no'){
          $proble_orga2 = new Proble_orga2;
          $proble_orga2->descripcion = 'no se cuenta con registro sanitario';
          $proble_orga2->codigo = 'org9';
          $proble_orga2->id_user = $id;
          $proble_orga2->save();
        }

        $organizacionales->sello_spg = $request->get('sello_spg');
        $organizacionales->certi_orga = $request->get('certi_orga');
        $organizacionales->sello_seg = $request->get('sello_seg');
        $organizacionales->save();

        return \Redirect::to('daorgani/');
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
      $organizacionales = Organizacionales::findOrFail($id);
      return view('content/organizacionales/edit', compact('organizacionales'));
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

      $pro_org1 = DB::table('proble_orga2')->where('id_user', $id)->where('codigo', 'org1')->first();
      $pro_org2 = DB::table('proble_orga2')->where('id_user', $id)->where('codigo', 'org2')->first();
      $pro_org3 = DB::table('proble_orga2')->where('id_user', $id)->where('codigo', 'org3')->first();
      $pro_org4 = DB::table('proble_orga2')->where('id_user', $id)->where('codigo', 'org4')->first();
      $pro_org5 = DB::table('proble_orga2')->where('id_user', $id)->where('codigo', 'org5')->first();
      $pro_org6 = DB::table('proble_orga2')->where('id_user', $id)->where('codigo', 'org6')->first();
      $pro_org7 = DB::table('proble_orga2')->where('id_user', $id)->where('codigo', 'org7')->first();
      $pro_org8 = DB::table('proble_orga2')->where('id_user', $id)->where('codigo', 'org8')->first();
      $pro_org9 = DB::table('proble_orga2')->where('id_user', $id)->where('codigo', 'org9')->first();

      if($request->get('perso_juri') == 'no'){
        if(!$pro_org1){
          $proble_orga2 = new Proble_orga2;
          $proble_orga2->descripcion = 'no se cuenta con personeria juridica';
          $proble_orga2->codigo = 'org1';
          $proble_orga2->id_user = $id;
          $proble_orga2->save();
        }
      }else{
        if($pro_org1){
          Proble_orga2::where('id_user',$id)->where('codigo','org1')->delete();
        }
      }

      $organ1 = '';
      if($request->hasFile('organi')){
        $file = $request->file('organi');
        $name = time().$file->getClientOriginalName();
        $organ1 = $name;
        $file->move(public_path().'/pdf/organigrama/',$name);
        if($pro_org2){
          Proble_orga2::where('id_user',$id)->where('codigo','org2')->delete();
        }
      }else{
        if(!$pro_org2){
          $proble_orga2 = new Proble_orga2;
          $proble_orga2->descripcion = 'no se cuenta con organigrama';
          $proble_orga2->codigo = 'org2';
          $proble_orga2->id_user = $id;
          $proble_orga2->save();
        }
      }


      $organ2 = '';
      if($request->hasFile('esta_regl')){
        $file = $request->file('esta_regl');
        $name = time().$file->getClientOriginalName();
        $organ2 = $name;
        $file->move(public_path().'/pdf/estatutos_reglamentos/',$name);
        if($pro_org3){
          Proble_orga2::where('id_user',$id)->where('codigo','org3')->delete();
        }
      }else{
        if(!$pro_org3){
          $proble_orga2 = new Proble_orga2;
          $proble_orga2->descripcion = 'no se cuenta con estatuos y reglamentos internos';
          $proble_orga2->codigo = 'org3';
          $proble_orga2->id_user = $id;
          $proble_orga2->save();
        }
      }

      if($request->get('manu_func') == 'no'){
        if(!$pro_org4){
          $proble_orga2 = new Proble_orga2;
          $proble_orga2->descripcion = 'no se cuenta con manual de funciones';
          $proble_orga2->codigo = 'org4';
          $proble_orga2->id_user = $id;
          $proble_orga2->save();
        }
      }else{
        if($pro_org4){
          Proble_orga2::where('id_user',$id)->where('codigo','org4')->delete();
        }
      }

      $organ3 = '';
      if($request->hasFile('nit')){
        $file = $request->file('nit');
        $name = time().$file->getClientOriginalName();
        $organ3 = $name;
        $file->move(public_path().'/pdf/nit/',$name);
        if($pro_org5){
          Proble_orga2::where('id_user',$id)->where('codigo','org5')->delete();
        }
      }else{
        if(!$pro_org5){
          $proble_orga2 = new Proble_orga2;
          $proble_orga2->descripcion = 'no se cuenta con nit';
          $proble_orga2->codigo = 'org5';
          $proble_orga2->id_user = $id;
          $proble_orga2->save();
        }
      }


      if($request->get('rau') == 'no'){
        if(!$pro_org6){
          $proble_orga2 = new Proble_orga2;
          $proble_orga2->descripcion = 'no se cuenta con rau';
          $proble_orga2->codigo = 'org6';
          $proble_orga2->id_user = $id;
          $proble_orga2->save();
        }
      }else{
        if($pro_org6){
          Proble_orga2::where('id_user',$id)->where('codigo','org6')->delete();
        }
      }

      $organ4 = '';
      if($request->hasFile('fund_empr')){
        $file = $request->file('fund_empr');
        $name = time().$file->getClientOriginalName();
        $organ4 = $name;
        $file->move(public_path().'/pdf/funda_empresas/',$name);
        if($pro_org7){
          Proble_orga2::where('id_user',$id)->where('codigo','org7')->delete();
        }
      }else{
        if(!$pro_org7){
          $proble_orga2 = new Proble_orga2;
          $proble_orga2->descripcion = 'no se cuenta con funda empresas';
          $proble_orga2->codigo = 'org7';
          $proble_orga2->id_user = $id;
          $proble_orga2->save();
        }
      }

      if($request->get('targ_empr') == 'no'){
        if(!$pro_org8){
          $proble_orga2 = new Proble_orga2;
          $proble_orga2->descripcion = 'no se cuenta con targeta empresarial';
          $proble_orga2->codigo = 'org8';
          $proble_orga2->id_user = $id;
          $proble_orga2->save();
        }
      }else{
        if($pro_org8){
          Proble_orga2::where('id_user',$id)->where('codigo','org8')->delete();
        }
      }

      if($request->get('regi_sani') == 'no'){
        if(!$pro_org9){
          $proble_orga2 = new Proble_orga2;
          $proble_orga2->descripcion = 'no se cuenta con registro sanitario';
          $proble_orga2->codigo = 'org9';
          $proble_orga2->id_user = $id;
          $proble_orga2->save();
        }
      }else{
        if($pro_org9){
          Proble_orga2::where('id_user',$id)->where('codigo','org9')->delete();
        }
      }

      Organizacionales::where('id_user', $id)->update(['perso_juri'=>$request->get('perso_juri'),
                                                       'organi'=>$organ1,
                                                       'esta_regl'=>$organ2,
                                                       'manu_func'=>$request->get('manu_func'),
                                                       'nit'=>$organ3,
                                                       'rau'=>$request->get('rau'),
                                                       'fund_empr'=>$organ4,
                                                       'targ_empr'=>$request->get('targ_empr'),
                                                       'regi_sani'=>$request->get('regi_sani')
                                                      ]);

      // Organizacionales::where('id_user', '=', $id)->update($datosOrganizacionales);

      $organizacionales = Organizacionales::where('id_user',$id)->first();
      return view('content/organizacionales/index', compact('organizacionales'));
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

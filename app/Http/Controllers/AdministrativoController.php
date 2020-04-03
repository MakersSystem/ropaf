<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Administrativo;
use DB;

use App\Proble_admi2;

class AdministrativoController extends Controller
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
        $administrativo = DB::table('administrativo')->where('id_user', 'LIKE', '%'.$id.'%')->first();
        if($administrativo){
          return view('content/administrativo/index', ["administrativo" => $administrativo]);
        }else{
          return view('content/administrativo/present');
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
        return view('content/administrativo/create');
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
        $administrativo = new Administrativo;
        $id = $request->session()->get('key');
        $administrativo->id_user = $id;

        $administrativo->sis_cont = $request->get('sis_cont');
        if($request->get('sis_cont') == 'no'){
          $Proble_admi2 = new Proble_admi2();
          $Proble_admi2->descripcion = 'no se cuenta con sistema contable';
          $Proble_admi2->codigo = 'adm1';
          $Proble_admi2->id_user = $id;
          $Proble_admi2->save();
        }

        $administrativo->man_func = $request->get('man_func');
        if($request->get('man_func') == 'no'){
          $Proble_admi2 = new Proble_admi2();
          $Proble_admi2->descripcion = 'no se cuenta con manual de funciones';
          $Proble_admi2->codigo = 'adm2';
          $Proble_admi2->id_user = $id;
          $Proble_admi2->save();
        }

        $administrativo->cal_cost = $request->get('cal_cost');
        if($request->get('cal_cost') == 'no'){
          $Proble_admi2 = new Proble_admi2();
          $Proble_admi2->descripcion = 'no se cuenta con calculo de costos';
          $Proble_admi2->codigo = 'adm3';
          $Proble_admi2->id_user = $id;
          $Proble_admi2->save();
        }

        $administrativo->inven = $request->get('inven');
        if($request->get('inven') == 'no'){
          $Proble_admi2 = new Proble_admi2();
          $Proble_admi2->descripcion = 'no se cuenta con inventario';
          $Proble_admi2->codigo = 'adm4';
          $Proble_admi2->id_user = $id;
          $Proble_admi2->save();
        }

        $administrativo->man_proc = $request->get('man_proc');
        if($request->get('man_proc') == 'no'){
          $Proble_admi2 = new Proble_admi2();
          $Proble_admi2->descripcion = 'no se cuenta con manual de procesos';
          $Proble_admi2->codigo = 'adm5';
          $Proble_admi2->id_user = $id;
          $Proble_admi2->save();
        }

        $administrativo->pla_nego = $request->get('pla_nego');
        if($request->get('pla_nego') == 'no'){
          $Proble_admi2 = new Proble_admi2();
          $Proble_admi2->descripcion = 'no se cuenta con plan de negocios';
          $Proble_admi2->codigo = 'adm6';
          $Proble_admi2->id_user = $id;
          $Proble_admi2->save();
        }

        if($request->hasFile('poa')){
          $file = $request->file('poa');
          $name = time().$file->getClientOriginalName();
          $administrativo->poa = $name;
          $file->move(public_path().'/pdf/poa/',$name);
        }else{
          $Proble_admi2 = new Proble_admi2();
          $Proble_admi2->descripcion = 'no se cuenta con poa';
          $Proble_admi2->codigo = 'adm7';
          $Proble_admi2->id_user = $id;
          $Proble_admi2->save();
        }

        if($request->hasFile('pei')){
          $file = $request->file('pei');
          $name = time().$file->getClientOriginalName();
          $administrativo->pei = $name;
          $file->move(public_path().'/pdf/pei/',$name);
        }else{
          $Proble_admi2 = new Proble_admi2();
          $Proble_admi2->descripcion = 'no se cuenta con pei';
          $Proble_admi2->codigo = 'adm8';
          $Proble_admi2->id_user = $id;
          $Proble_admi2->save();
        }

        $administrativo->imp_dia = $request->get('imp_dia');
        if($request->get('imp_dia') == 'no'){
          $Proble_admi2 = new Proble_admi2();
          $Proble_admi2->descripcion = 'no se cuenta con impuestos al dia';
          $Proble_admi2->codigo = 'adm9';
          $Proble_admi2->id_user = $id;
          $Proble_admi2->save();
        }

        $administrativo->save();

        return \Redirect::to('daadmin/');
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
        $administrativo = Administrativo::findOrFail($id);
        return view('content/administrativo/edit', compact('administrativo'));
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
        $pro_adm1 = DB::table('proble_admi2')->where('id_user', $id)->where('codigo', 'adm1')->first();
        $pro_adm2 = DB::table('proble_admi2')->where('id_user', $id)->where('codigo', 'adm2')->first();
        $pro_adm3 = DB::table('proble_admi2')->where('id_user', $id)->where('codigo', 'adm3')->first();
        $pro_adm4 = DB::table('proble_admi2')->where('id_user', $id)->where('codigo', 'adm4')->first();
        $pro_adm5 = DB::table('proble_admi2')->where('id_user', $id)->where('codigo', 'adm5')->first();
        $pro_adm6 = DB::table('proble_admi2')->where('id_user', $id)->where('codigo', 'adm6')->first();
        $pro_adm7 = DB::table('proble_admi2')->where('id_user', $id)->where('codigo', 'adm7')->first();
        $pro_adm8 = DB::table('proble_admi2')->where('id_user', $id)->where('codigo', 'adm8')->first();
        $pro_adm9 = DB::table('proble_admi2')->where('id_user', $id)->where('codigo', 'adm9')->first();

        if($request->get('sis_cont') == 'no'){
          if(!$pro_adm1){
            $proble_admi2 = new Proble_admi2;
            $proble_admi2->descripcion = 'no se cuenta con sistema contable';
            $proble_admi2->codigo = 'adm1';
            $proble_admi2->id_user = $id;
            $proble_admi2->save();
          }
        }else{
          if($pro_adm1){
            Proble_admi2::where('id_user',$id)->where('codigo','adm1')->delete();
          }
        }


        if($request->get('man_func') == 'no'){
          if(!$pro_adm2){
            $proble_admi2 = new Proble_admi2;
            $proble_admi2->descripcion = 'no se cuenta con manual de funciones';
            $proble_admi2->codigo = 'adm2';
            $proble_admi2->id_user = $id;
            $proble_admi2->save();
          }
        }else{
          if($pro_adm2){
            Proble_admi2::where('id_user',$id)->where('codigo','adm2')->delete();
          }
        }


        if($request->get('cal_cost') == 'no'){
          if(!$pro_adm3){
            $proble_admi2 = new Proble_admi2;
            $proble_admi2->descripcion = 'no se cuenta con calculo de costos';
            $proble_admi2->codigo = 'adm3';
            $proble_admi2->id_user = $id;
            $proble_admi2->save();
          }
        }else{
          if($pro_adm3){
            Proble_admi2::where('id_user',$id)->where('codigo','adm3')->delete();
          }
        }


        if($request->get('inven') == 'no'){
          if(!$pro_adm4){
            $proble_admi2 = new Proble_admi2;
            $proble_admi2->descripcion = 'no se cuenta con inventario';
            $proble_admi2->codigo = 'adm4';
            $proble_admi2->id_user = $id;
            $proble_admi2->save();
          }
        }else{
          if($pro_adm4){
            Proble_admi2::where('id_user',$id)->where('codigo','adm4')->delete();
          }
        }


        if($request->get('man_proc') == 'no'){
          if(!$pro_adm5){
            $proble_admi2 = new Proble_admi2;
            $proble_admi2->descripcion = 'no se cuenta con manual de procesos';
            $proble_admi2->codigo = 'adm5';
            $proble_admi2->id_user = $id;
            $proble_admi2->save();
          }
        }else{
          if($pro_adm5){
            Proble_admi2::where('id_user',$id)->where('codigo','adm5')->delete();
          }
        }

        if($request->get('pla_nego') == 'no'){
          if(!$pro_adm6){
            $proble_admi2 = new Proble_admi2;
            $proble_admi2->descripcion = 'no se cuenta con plan de negocios';
            $proble_admi2->codigo = 'adm6';
            $proble_admi2->id_user = $id;
            $proble_admi2->save();
          }
        }else{
          if($pro_adm6){
            Proble_admi2::where('id_user',$id)->where('codigo','adm6')->delete();
          }
        }


        $admin1 = '';
        if($request->hasFile('poa')){
          $file = $request->file('poa');
          $name = time().$file->getClientOriginalName();
          $admin1 = $name;
          $file->move(public_path().'/pdf/poa/',$name);
          if($pro_adm7){
            Proble_admi2::where('id_user',$id)->where('codigo','adm7')->delete();
          }
        }else{
          if(!$pro_adm7){
            $proble_orga2 = new Proble_admi2;
            $proble_orga2->descripcion = 'no se cuenta con poa';
            $proble_orga2->codigo = 'adm7';
            $proble_orga2->id_user = $id;
            $proble_orga2->save();
          }
        }

        $admin2 = '';
        if($request->hasFile('pei')){
          $file = $request->file('pei');
          $name = time().$file->getClientOriginalName();
          $admin2 = $name;
          $file->move(public_path().'/pdf/pei/',$name);
          if($pro_adm8){
            Proble_admi2::where('id_user',$id)->where('codigo','adm8')->delete();
          }
        }else{
          if(!$pro_adm8){
            $proble_orga2 = new Proble_admi2;
            $proble_orga2->descripcion = 'no se cuenta con pei';
            $proble_orga2->codigo = 'adm8';
            $proble_orga2->id_user = $id;
            $proble_orga2->save();
          }
        }



        if($request->get('imp_dia') == 'no'){
          if(!$pro_adm9){
            $proble_admi2 = new Proble_admi2;
            $proble_admi2->descripcion = 'no se cuenta con impuestos al dia';
            $proble_admi2->codigo = 'adm9';
            $proble_admi2->id_user = $id;
            $proble_admi2->save();
          }
        }else{
          if($pro_adm9){
            Proble_admi2::where('id_user',$id)->where('codigo','adm9')->delete();
          }
        }


        Administrativo::where('id_user', $id)->update(['sis_cont'=>$request->get('sis_cont'),
                                                         'man_func'=>$request->get('man_func'),
                                                         'cal_cost'=>$request->get('cal_cost'),
                                                         'inven'=>$request->get('inven'),
                                                         'man_proc'=>$request->get('man_proc'),
                                                         'pla_nego'=>$request->get('pla_nego'),
                                                         'poa'=>$admin1,
                                                         'pei'=>$admin2,
                                                         'imp_dia'=>$request->get('imp_dia')
                                                        ]);
        // $datosAdministrativos = request()->except(['_token','_method']);
        // Administrativo::where('id', '=', $id)->update($datosAdministrativos);
        // $administrativo = Administrativo::findOrFail($id);
        $administrativo = Administrativo::where('id_user',$id)->first();
        return view('content/administrativo/index', compact('administrativo'));
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

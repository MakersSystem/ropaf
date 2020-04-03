<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mercado;
use DB;

class MercadoController extends Controller
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
        $mercado = DB::table('mercado')->where('id_user', 'LIKE', '%'.$id.'%')->first();
        if($mercado){
          return view('content/mercado/index', ["mercado" => $mercado]);
        }else{
          return view('content/mercado/present');
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
        return view('content/mercado/create');
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
        $mercado = new Mercado;
        $id = $request->session()->get('key');
        $mercado->id_user = $id;
        $mercado->norm_san = $request->get('norm_san');
        $mercado->tama = $request->get('tama');
        $mercado->mate_pri = $request->get('mate_pri');
        $mercado->entr_opr = $request->get('entr_opr');
        $mercado->cant = $request->get('cant');
        $mercado->empa = $request->get('empa');
        $mercado->etiq = $request->get('etiq');
        $mercado->dura_pro = $request->get('dura_pro');
        $mercado->save();

        return \Redirect::to('mercado/');
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
      $mercado = Mercado::findOrFail($id);
      return view('content/mercado/edit', compact('mercado'));
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
      $datosMercado = request()->except(['_token','_method']);
      Mercado::where('id', '=', $id)->update($datosMercado);

      $mercado = Mercado::findOrFail($id);
      return view('content/mercado/index', compact('mercado'));
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Certificacion;
use DB;

class CertificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if($request->ajax()){
          $id = $request->session()->get('key');
          return Certificacion::where('id_user', $id)->get();
        }else{
          //Proble_repre::where('id_user', auth()->id())->get();
          //echo '1';
          return view('home');
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
        $certificacion = new Certificacion();
        $certificacion->tipo = $request->tipo;
        $certificacion->prom_super = $request->prom_super;
        $certificacion->pri_cul = $request->pri_cul;
        $id = $request->session()->get('key');
        $certificacion->id_user = $id;
        $certificacion->save();
        return $certificacion;
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
        //
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
      $certificacion = Certificacion::find($id);
      $certificacion->tipo = $request->tipo;
      $certificacion->prom_super = $request->prom_super;
      $certificacion->pri_cul = $request->pri_cul;
      $certificacion->save();
      return $certificacion;
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
        $certificacion = Certificacion::find($id);
        $certificacion->delete();
    }
}

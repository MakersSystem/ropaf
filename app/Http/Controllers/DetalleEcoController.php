<?php

namespace App\Http\Controllers;

use App\Detalle_eco;
use Illuminate\Http\Request;

class DetalleEcoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      if($request->ajax()){
        $id = $request->session()->get('key');
        return Detalle_eco::where('id_user', $id)->get();
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
        $detalle_eco = new Detalle_eco();
        $detalle_eco->detalle = $request->detalle;
        $detalle_eco->precio = $request->precio;
        $detalle_eco->nro_soc = $request->nro_soc;
        $detalle_eco->pro_uni = $request->pro_uni;
        $id = $request->session()->get('key');
        $detalle_eco->id_user = $id;
        $detalle_eco->save();
        return $detalle_eco;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Detalle_eco  $detalle_eco
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detalle_eco  $detalle_eco
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
     * @param  \App\Detalle_eco  $detalle_eco
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $detalle_eco = Detalle_eco::find($id);
        $detalle_eco->detalle = $request->detalle;
        $detalle_eco->precio = $request->precio;
        $detalle_eco->nro_soc = $request->nro_soc;
        $detalle_eco->pro_uni = $request->pro_uni;
        $detalle_eco->save();
        return $detalle_eco;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detalle_eco  $detalle_eco
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

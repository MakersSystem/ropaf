<?php

namespace App\Http\Controllers;

use App\Demanda;
use Illuminate\Http\Request;

class DemandaController extends Controller
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
        return Demanda::where('id_user', $id)->get();
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
      $demanda = new Demanda();
      $demanda->financ = $request->financ;
      $demanda->demanda = $request->demanda;
      $demanda->tipo_serv = $request->tipo_serv;
      $demanda->para_q = $request->para_q;
      $id = $request->session()->get('key');
      $demanda->id_user = $id;
      $demanda->save();
      return $demanda;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Demanda  $demanda
     * @return \Illuminate\Http\Response
     */
    public function show(Demanda $demanda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Demanda  $demanda
     * @return \Illuminate\Http\Response
     */
    public function edit(Demanda $demanda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Demanda  $demanda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demanda $demanda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Demanda  $demanda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demanda $demanda)
    {
        //
    }
}

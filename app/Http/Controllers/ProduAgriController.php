<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produ_agri;
use DB;

class ProduAgriController extends Controller
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
          return Produ_agri::where('id_user', $id)->get();
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
        $pro_agri = new Produ_agri();
        $pro_agri->pro = $request->pro;
        $pro_agri->sup_cul = $request->sup_cul;
        $pro_agri->pro_soc = $request->pro_soc;
        $pro_agri->ren_soc = $request->ren_soc;
        $pro_agri->cant_entr = $request->cant_entr;
        $pro_agri->cant_vend = $request->cant_vend;
        $pro_agri->prec_cult = $request->prec_cult;
        $id = $request->session()->get('key');
        $pro_agri->id_user = $id;
        $pro_agri->save();
        return $pro_agri;
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
        $pro_agri = Produ_agri::find($id);
        $pro_agri->pro = $request->pro;
        $pro_agri->sup_cul = $request->sup_cul;
        $pro_agri->pro_soc = $request->pro_soc;
        $pro_agri->ren_soc = $request->ren_soc;
        $pro_agri->cant_entr = $request->cant_entr;
        $pro_agri->cant_vend = $request->cant_vend;
        $pro_agri->prec_cult = $request->prec_cult;
        $pro_agri->save();
        return $pro_agri;
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produ_pecu;
use DB;

class ProduPecuController extends Controller
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
          return Produ_pecu::where('id_user', $id)->get();
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
        $pro_pecu = new Produ_pecu();
        $pro_pecu->pro = $request->pro;
        $pro_pecu->tot_ani = $request->tot_ani;
        $pro_pecu->ani_uti = $request->ani_uti;
        $pro_pecu->ani_nac = $request->ani_nac;
        $pro_pecu->pre_ani = $request->pre_ani;
        $id = $request->session()->get('key');
        $pro_pecu->id_user = $id;
        $pro_pecu->save();
        return $pro_pecu;
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
        $pro_pecu = Produ_pecu::find($id);
        $pro_pecu->pro = $request->pro;
        $pro_pecu->tot_ani = $request->tot_ani;
        $pro_pecu->ani_uti = $request->ani_uti;
        $pro_pecu->ani_nac = $request->ani_nac;
        $pro_pecu->pre_ani = $request->pre_ani;
        $pro_pecu->save();
        return $pro_pecu;
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente_merc;
use DB;

class ClienteMercController extends Controller
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
          return Cliente_merc::where('id_user', $id)->get();
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
        $cli_merc = new Cliente_merc();
        $cli_merc->cli_merc = $request->cli_merc;
        $cli_merc->ani_ant = $request->ani_ant;
        $cli_merc->ani_act = $request->ani_act;
        $id = $request->session()->get('key');
        $cli_merc->id_user = $id;
        $cli_merc->save();
        return $cli_merc;
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
        $cli_merc = Cliente_merc::find($id);
        $cli_merc->cli_merc = $request->cli_merc;
        $cli_merc->ani_ant = $request->ani_ant;
        $cli_merc->ani_act = $request->ani_act;
        $cli_merc->save();
        return $cli_merc;
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

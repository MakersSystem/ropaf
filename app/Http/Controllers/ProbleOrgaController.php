<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Proble_orga;
use DB;

class ProbleOrgaController extends Controller
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
          return Proble_orga::where('id_user', $id)->get();
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
        $proble_orga = new Proble_orga();
        $proble_orga->descripcion = $request->descripcion;
        $id = $request->session()->get('key');
        $proble_orga->id_user = $id;
        $proble_orga->save();
        return $proble_orga;
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $proble_orga = Proble_orga::find($id);
      $proble_orga->delete();
    }
}

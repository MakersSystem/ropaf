<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Proble_pro;

class ProbleProController extends Controller
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
        return Proble_pro::where('id_user', $id)->get();
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
      $proble_pro = new Proble_pro();
      $proble_pro->descripcion = $request->descripcion;
      $id = $request->session()->get('key');
      $proble_pro->id_user = $id;
      $proble_pro->save();
      return $proble_pro;
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
      $proble_pro = Proble_pro::find($id);
      $proble_pro->delete();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;
use DB;

class ProductoController extends Controller
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
          return Producto::where('id_user', $id)->get();
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
        $producto = new Producto();
        $producto->producto = $request->producto;
        $producto->caracteristicas = $request->caracteristicas;
        $producto->prese_com = $request->prese_com;
        $producto->veces_pro = $request->veces_pro;
        $producto->epoca = $request->epoca;


        $producto->equi_ur = $request->equi_ur;
        $producto->cant_dest = $request->cant_dest;
        $producto->cant_vend = $request->cant_vend;
        $id = $request->session()->get('key');
        $producto->id_user = $id;
        $producto->save();
        return $producto;
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
      $producto = Producto::find($id);
      $producto->producto = $request->producto;
      $producto->caracteristicas = $request->caracteristicas;
      $producto->prese_com = $request->prese_com;
      $producto->veces_pro = $request->veces_pro;
      $producto->epoca = $request->epoca;


      $producto->equi_ur = $request->equi_ur;
      $producto->cant_dest = $request->cant_dest;
      $producto->cant_vend = $request->cant_vend;
      $producto->save();
      return $producto;
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

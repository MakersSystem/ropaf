<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto_vend;
use DB;

class ProductoVendController extends Controller
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
          return Producto_vend::where('id_user', $id)->get();
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
        $pro_vend = new Producto_vend();
        $pro_vend->producto = $request->producto;
        $pro_vend->finca_resc = $request->finca_resc;
        $pro_vend->centr_comp = $request->centr_comp;
        $pro_vend->feria = $request->feria;
        $pro_vend->mercado = $request->mercado;


        $pro_vend->tienda = $request->tienda;
        $pro_vend->otro = $request->otro;
        $id = $request->session()->get('key');
        $pro_vend->id_user = $id;
        $pro_vend->save();
        return $pro_vend;
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
        //
    }
}

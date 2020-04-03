<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Otro_pro;
use DB;

class OtroProController extends Controller
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
          return Otro_pro::where('id_user', $id)->get();
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
        $pro_otro = new Otro_pro();
        $pro_otro->pro = $request->pro;
        $pro_otro->pro_anu = $request->pro_anu;
        $pro_otro->can_ent = $request->can_ent;
        $pro_otro->can_ven = $request->can_ven;
        $pro_otro->pre_pro = $request->pre_pro;
        $id = $request->session()->get('key');
        $pro_otro->id_user = $id;
        $pro_otro->save();
        return $pro_otro;
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
        $pro_otro = Otro_pro::find($id);
        $pro_otro->pro = $request->pro;
        $pro_otro->pro_anu = $request->pro_anu;
        $pro_otro->can_ent = $request->can_ent;
        $pro_otro->can_ven = $request->can_ven;
        $pro_otro->pre_pro = $request->pre_pro;
        $pro_otro->save();
        return $pro_otro;
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

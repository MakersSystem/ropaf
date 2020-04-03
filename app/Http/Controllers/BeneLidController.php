<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Bene_lider;
use DB;

class BeneLidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $id = $request->session()->get('key');
        $bene_lider = DB::table('bene_lider')->where('id_user', 'LIKE', '%'.$id.'%')->first();
        if($bene_lider){

          return view('content/benelid/index', ["bene_lider" => $bene_lider]);
        }else{
          return view('content/benelid/present');
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
        return view('content/benelid/create');
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
        $bene_lid = new Bene_lider;
        $id = $request->session()->get('key');
        $bene_lid->id_user = $id;
        $bene_lid->func_lid = $request->get('func_lid');
        $bene_lid->save();

        return \Redirect::to('benelid/');
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

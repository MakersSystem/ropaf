<?php

namespace App\Http\Controllers;

use App\Economico;
use Illuminate\Http\Request;
use DB;

class EconomicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $id = $request->session()->get('key');
      $economico = DB::table('economico')->where('id_user', $id)->first();
      if($economico){
        return view('content/economico/index', ["economico" => $economico]);
      }else{
        return view('content/economico/present');
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content/economico/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $economico = new Economico;
      $id = $request->session()->get('key');
      $economico->id_user = $id;
      $economico->apoya_ins = $request->get('apoya_ins');
      $economico->satis_org = $request->get('satis_org');
      $economico->save();

      return \Redirect::to('economico/');
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
        $economico = Economico::findOrFail($id);
        return view('content/economico/edit', ["economico" => $economico]);
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
      $economico = request()->except(['_token','_method']);
      Economico::where('id', '=', $id)->update($economico);

      $economico = Economico::findOrFail($id);
      return view('content/economico/index', compact('economico'));
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

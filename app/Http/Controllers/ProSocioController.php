<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pro_socio;
use DB;

class ProSocioController extends Controller
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
        $pro_socio = DB::table('pro_socio')->where('id_user', 'LIKE', '%'.$id.'%')->first();
        if($pro_socio){
          return view('content/prosocio/index', ["pro_socio" => $pro_socio]);
        }else{
          return view('content/prosocio/present');
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
        return view('content/prosocio/create');
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
        $pro_socio = new Pro_socio;
        $id = $request->session()->get('key');
        $pro_socio->id_user = $id;
        $pro_socio->pro_sup = $request->get('pro_sup');
        $pro_socio->pro_cul = $request->get('pro_cul');
        $pro_socio->pro_rie = $request->get('pro_rie');
        $pro_socio->save();

        return \Redirect::to('daproduso/');
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
      $pro_socio = DB::table('pro_socio')->where('id', $id)->first();
      return view('content/prosocio/edit', ["pro_socio" => $pro_socio]);
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
      Pro_socio::where('id', '=', $id)->update(['pro_sup'=>$request->pro_sup,
                                                'pro_cul'=>$request->pro_cul,
                                                'pro_rie'=>$request->pro_rie
                                                ]);

      $pro_socio = Pro_socio::findOrFail($id);
      return view('content/prosocio/index', compact('pro_socio'));
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

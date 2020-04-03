<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Organizacion;
use DB;

class OrganizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //echo $request->user();
        //echo $request->user()->id;
        $id = $request->session()->get('key');
        // echo $id;
        $organizacion = DB::table('organizacion')->where('id_user', 'LIKE', '%'.$id.'%')->first();
        if($organizacion){

          return view('content/organizacion/index', ["organizacion" => $organizacion]);
        }else{
          return view('content/organizacion/present');
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
        return view('content/organizacion/create');
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
        $organizacion = new Organizacion;
        $id = $request->session()->get('key');
        $organizacion->id_user = $id;
        $nom = strtoupper( $request->get('nombre'));
        $organizacion->nombre = $nom;
        $sig = strtoupper($request->get('sigla'));
        $organizacion->sigla = $sig;
        $departamento = strtoupper($request->get('departamento'));
        $organizacion->departamento = $departamento;
        $provincia = strtoupper($request->get('provincia'));
        $organizacion->provincia = $provincia;
        $municipio = strtoupper($request->get('municipio'));
        $organizacion->municipio = $municipio;
        $representante = strtoupper($request->get('representante'));
        $organizacion->representante = $representante;
        $direccion = strtoupper($request->get('direccion'));
        $organizacion->direccion = $direccion;
        $organizacion->telefono=$request->get('telefono');
        $correo = strtolower($request->get('correo'));
        $organizacion->correo=$correo;
        $org = strtoupper($request->get('organizacion'));
        $organizacion->organizacion = $org;
        $organizacion->nivel = $request->get('nivel');
        $organizacion->nro_comunidades = $request->get('nro_comunidades');
        $organizacion->latitud = $request->get('latitud');
        $organizacion->longitud = $request->get('longitud');
        $organizacion->save();

        return \Redirect::to('organizacion/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $organizacion = Organizacion::findOrFail($id);
      return view('content/organizacion/edit', compact('organizacion'));
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
      $datosOrganizacion = request()->except(['_token','_method']);
      Organizacion::where('id', '=', $id)->update($datosOrganizacion);

      $organizacion = Organizacion::findOrFail($id);
      return view('content/organizacion/index', compact('organizacion'));
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

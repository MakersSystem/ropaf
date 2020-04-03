<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produ_eco;
use DB;

class ProduEcoController extends Controller
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
        $produ_eco = DB::table('produ_eco')->where('id_user', $id)->first();
        if($produ_eco){
          return view('content/produeco/index', ["produ_eco" => $produ_eco]);
        }else{
          return view('content/produeco/present');
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
        return view('content/produeco/create');
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
        $produ_eco = new Produ_eco;
        $produ_eco->pro_soc = $request->pro_soc;
        $produ_eco->cer_soc = $request->cer_soc;
        $produ_eco->sup_soc = $request->sup_soc;
        $id = $request->session()->get('key');
        $produ_eco->id_user = $id;

        if($request->hasFile('adju')){
          $file = $request->file('adju');
          $name = time().$file->getClientOriginalName();
          $produ_eco->adju = $name;
          $file->move(public_path().'/'.'files_eco/',$name);
        }

        $produ_eco->save();
        return \Redirect::to('proeco/');
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
        $produ_eco = DB::table('produ_eco')->where('id', $id)->first();
        return view('content/produeco/edit', ["produ_eco" => $produ_eco]);
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
      // $proeco = request()->except(['_token','_method']);
      $produ = '';
      if($request->hasFile('adju')){
        $file = $request->file('adju');
        $name = time().$file->getClientOriginalName();
        $produ = $name;
        $file->move(public_path().'/'.'files_eco/',$name);
      }else{
        $pro_aux = Produ_eco::where('id', '=', $id)->first();
        $produ = $pro_aux->adju;
      }
      Produ_eco::where('id', '=', $id)->update(['pro_soc'=>$request->pro_soc,
                                                'cer_soc'=>$request->cer_soc,
                                                'sup_soc'=>$request->sup_soc,
                                                'adju'=>$produ]);

      $produ_eco = Produ_eco::findOrFail($id);
      return view('content/produeco/index', compact('produ_eco'));
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

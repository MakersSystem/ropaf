<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ProductoFinal;
use DB;

use Helper;

class ProductoFinalController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
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

    public function showVueSearch()
    {
        return view('content.productivo.index');
    }

    public function getVueSearch(Request $request)
    {
        $search =  $request->search;

        $posts = '';

        if (trim($request->search)) {
            $posts = ProductoFinal::where('pro_nombre','LIKE','%'.$search.'%')
                            // ->orderBy('pro_nombre','DESC')->limit(5)->get();
                            ->limit(5)->get();
            // $posts = $posts->map(function ($post, $key) {
            //                 return [
            //                             'pro_nombre' => $post['pro_nombre'],
            //                             // 'pro_descripcion'  => url('blog/'.$post['slug']),
            //                             'pro_descripcion'  => $post['pro_descripcion'],
            //                             'pro_imagen' => Helper::catch_first_image($post['pro_imagen']),
            //                        ];
            //             });
        }

        return $posts;
    }

    public function getVueSearch2(Request $request)
    {
        $search =  $request->search;

        $posts = '';

        if (trim($request->search)) {
            $id = $request->session()->get('key');
            // $posts = DB::table('producto_final as pf')
            //                             ->join('producto as pr', 'pr.producto', '=', 'pf.pro_nombre')
            //                             ->where('pr.id_user','LIKE','%'.$id.'%')
            //                             ->where('pf.pro_nombre','LIKE','%'.$search.'%')
            //                             ->select('pr.producto','pf.pro_imagen','pf.pro_descripcion')
            //                             ->limit(5)->get();

            $posts = DB::table('producto as pr')
                                        ->where('pr.id_user',$id)
                                        ->where('pr.producto','LIKE','%'.$search.'%')
                                        ->join('producto_final as pf', 'pr.producto', '=', 'pf.pro_nombre')
                                        ->select('pf.pro_imagen','pf.pro_descripcion','pf.pro_nombre')
                                        ->limit(5)->get();
            // $posts = Producto::where('producto','LIKE','%'.$search.'%','and','id','LIKE','%'.$id.'%')
            //                 ->limit(5)->get();
        }

        return $posts;
    }
}

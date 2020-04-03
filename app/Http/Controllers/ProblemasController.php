<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Proble_orga2;
use App\Proble_admi2;
use App\Proble_repre2;

class ProblemasController extends Controller
{
  public function proble_orga2(Request $request)
  {
    if($request->ajax()){
      $id = $request->session()->get('key');
      return Proble_orga2::where('id_user', $id)->get();
    }else{
      //Proble_repre::where('id_user', auth()->id())->get();
      //echo '1';
      return view('home');
    }
  }

  public function proble_admi2(Request $request)
  {
    if($request->ajax()){
      $id = $request->session()->get('key');
      return Proble_admi2::where('id_user', $id)->get();
    }else{
      //Proble_repre::where('id_user', auth()->id())->get();
      //echo '1';
      return view('home');
    }
  }

  public function proble_repre2(Request $request)
  {
    if($request->ajax()){
      $id = $request->session()->get('key');
      return Proble_repre2::where('id_user', $id)->get();
    }else{
      //Proble_repre::where('id_user', auth()->id())->get();
      //echo '1';
      return view('home');
    }
  }
}

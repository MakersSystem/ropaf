<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxUploadController extends Controller
{
  //
  function index()
  {
    // return view('ajax_upload');
  }

  function action(Request $request)
  {

      $image = $request->file('image');
      $new_name = 'problemas' . '.' . 'png';
      $image->move(public_path('images_chart'), $new_name);

      $image2 = $request->file('image2');
      $new_name2 = 'productores' . '.' . 'png';
      $image2->move(public_path('images_chart'), $new_name2);

      //$file = $request->files->get('image');
      //$nameInTextInput = $request->request->get("filename");
  }
}

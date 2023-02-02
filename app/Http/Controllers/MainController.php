<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Saints;

class MainController extends Controller
{
  public function home()
  {
    $saints = Saints::all();

    $data = [

      'degrees' => $saints
    ];

    return view('home', $data);
  }
}
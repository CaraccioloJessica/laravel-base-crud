<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Saint;

class MainController extends Controller
{
  // index
  public function home()
  {
    $saints = Saint::all();

    // $data = [
    //   'saints' => $saints
    // ];

    return view('home', compact('saints'));
  }

  // show
  public function show($id)
  {
    $saint = Saint::find($id);

    $data = [
      'saint' => $saint
    ];

    return view('saint', $data);
  }

  // destroy
  public function destroy($id)
  {
    $saint = Saint::find($id);
    $saint->delete();

    return redirect()->route('home');
  }

  // create
  public function create()
  {
    return view('create');
  }

  public function store()
  {
    var_dump(true);
    die();
  }
}
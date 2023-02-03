<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Saint;

class MainController extends Controller
{
  // index
  public function home()
  {
    $saints = Saint::orderBy('created_at', 'DESC')->get();

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

  public function store(Request $request)
  {
    $data = $request->all();

    $saint = new Saint();

    $saint->name = $data['name'];
    $saint->place_of_birth = $data['place_of_birth'];
    $saint->given_blessing = $data['given_blessing'];
    $saint->miracles_number = $data['miracles_number'];

    $saint->save();

    return redirect()->route('home');
  }
}
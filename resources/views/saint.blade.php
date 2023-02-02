@extends('layout/main-layout')

@section('content')
<div class="container text-center py-5 my_saint">
  <div>
    <span>Nome:</span> {{$saint -> name}}
  </div>

  <div>
    <span>Luogo di nascita:</span> {{$saint -> place_of_birth}}
  </div>

  <div>
    <span>Benedizione:</span> {{$saint -> given_blessing}}
  </div>

  <div>
    <span>Miracoli:</span> {{$saint -> miracles_number}}
  </div>
</div>
@endsection
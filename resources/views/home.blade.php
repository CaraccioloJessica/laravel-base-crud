@extends('layout.main-layout')

@section('content')
  <h1>Saints</h1>
  <ul>
    @foreach ($saints as $saint)
    <li>
      Nome Santo: {{$saint -> name}} <br>
      N. Miracoli: {{$saint -> miracles_number}}
    </li>       
    @endforeach
  </ul>
@endsection
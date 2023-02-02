@extends('layout.main-layout')

@section('content')
  <ul class="container d-flex flex-wrap justify-content-between">
    @foreach ($saints as $saint)
    <li class="card mb-3 d-flex align-items-center justify-content-center">
      <a href="/saint/{{$saint->id}}">
        Nome: {{$saint -> name}} <br>
        Miracoli: {{$saint -> miracles_number}}
      </a>
    </li>       
    @endforeach
  </ul>
@endsection
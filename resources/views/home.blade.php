@extends('layout.main-layout')

@section('content')
  <a href="{{route('saint.create')}}">Create Saint</a>

  <ul class="container d-flex flex-wrap justify-content-between">
    @foreach ($saints as $saint)
    <li class="card mb-3 d-flex align-items-center justify-content-center">
      <a href="{{route('saint.show', ['id' => $saint -> id])}}">
        Nome: {{$saint -> name}} <br>
        Miracoli: {{$saint -> miracles_number}}
      </a>
      <a class="text-danger" href="{{route('saint.destroy', ['id' => $saint -> id])}}">&cross;</a>
    </li>       
    @endforeach
  </ul>
@endsection
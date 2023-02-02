@extends('layout/main-layout')

@section('content')
    <div>{{$saint -> name}}</div>
    <div>{{$saint -> place_of_birth}}</div>
    <div>{{$saint -> given_blessing}}</div>
    <div>{{$saint -> miracles_number}}</div>
@endsection
@extends('layout.main-layout')

@section('content')
  <h1 class="text-center">Create new saint</h1>

  <form method="POST" action="{{route('saint.store')}}"> 
    @csrf

    <input type="text" name="name" class="feedback-input" placeholder="Name" /> 

    <input type="text" name="place_of_birth" class="feedback-input" placeholder="Place of birth" />

    <label for="blessing_date">Blessing date</label>
    <input type="date" name="given_blessing" 
    class="feedback-input"></input>

    <input type="number" name="miracles_number"
    class="feedback-input" placeholder="Miracle number"></input>

    <input type="submit" value="CREATE"/>
  </form>
@endsection
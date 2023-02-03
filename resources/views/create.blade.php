@extends('layout.main-layout')

@section('content')
  <h1 class="text-center">Create new saint</h1>

  <form method="POST" action="{{route('saint.store')}}"> 
    @csrf
    
    <input type="text" name="name" class="feedback-input" placeholder="Name" /> 

    <input type="text" name="place_of_birth" class="feedback-input" placeholder="Place of birth" />

    <input type="date" name="blessing_date" 
    class="feedback-input"
    placeholder="Blessing date"></input>

    <input type="number" name="miracle_number"
    class="feedback-input" placeholder="Miracle number"></input>

    <input type="submit" value="CREATE"/>
  </form>
@endsection
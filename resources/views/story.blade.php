@extends('layout.app')

@section('content')

<div class="countries">

@foreach ($countries as $country)

@if($loop->first)
    <h4>First visited country</h4>
@elseif ($loop->last)
    <h4>Last visited country</h4>
@endif
    <p> I have been in : {{ $country['name'] }}</p>

    @endforeach
</div>

@endsection

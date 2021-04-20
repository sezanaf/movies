@extends('layouts.app')

@section("title", "Vivify Movies")

@section('content')
  <h2>Movies</h2>
<ul>
  @foreach($movies as $movie)
  <li><a href="{{route('movie', ['movie' => $movie->id])}}">
{{$movie->title}}</a></li>
  @endforeach
</ul>
@endsection
@extends('layouts.app')

@section("title", $movie->title)

@section('content')
<h2>{{$movie->title}}</h2>
<p>Year: {{ $movie->year }}</p>
<p>Genre: {{ $movie->genre }}</p>
<p>Director: {{ $movie->director }}</p>
<p>Storyline: {{ $movie->storyline }}</p>
@endsection
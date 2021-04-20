@extends('layouts.app')
@section('title', 'Create a movie')

@section('content')
<form action="/movies" method="POST">
  @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title"/>
    @error('title')
      <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="genre">Genre</label>
	<input type="text" class="form-control" id="genre" name="genre"/>
    @error('genre')
      <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="director">Director</label>
    <input type="text" class="form-control" id="director" name="director"/>
    @error('director')
      <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="year">Year</label>
    <input type="number" class="form-control" id="year" name="year"/>
    @error('year')
      <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="storyline">Storyline</label>
	<input type="text" class="form-control" id="storyline" name="storyline"/>
    @error('storyline')
      <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
	<button type="submit" class="btn btn-success">Add movie</button>
  </div>
</form>
@endsection
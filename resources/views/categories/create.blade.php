@extends('layouts.guest')

@section('content')
  <form action="/categories" method="POST">
    @csrf
    <input type="text" name="name" required>
    <input type="text" name="genre">
    <button type="submit">Submit</button>
  </form>
@endsection

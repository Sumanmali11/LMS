@extends('layouts.guest')

@section('content')
    <form action="/categories/{{$category->id}}" method="POST">
        @csrf
        @method('PATCH')
        <input type="text" name="name" value="{{ $category->name }}" required>
        <input type="text" name="genre" value="{{ $category->genre }}">
        <button type="submit">Submit</button>
    </form>
@endsection

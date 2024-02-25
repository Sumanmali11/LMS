@extends('layouts.guest')

@section('content')
    <div>
        <h2>List of all Categories</h2>
        <table>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->genre }}</td>
                        <td>
                            <a href="/categories/edit/{{ $category->id }}">Edit</a>
                            <form action="/categories/{{ $category->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="/categories/create">Add New Category</a>
@endsection

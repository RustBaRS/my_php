@extends('layout')

@section('title', 'Books list')

@section('content')
<a class="btn btn-primary" role="button" href='{{ route("books.create") }}'>Create</a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Book title</th>
        <th scope="col">First Name of Author</th>
        <th scope="col">Last Name of Author</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <th scope="row">{{ $book->id }}</th>
            <td>
                <a style='text-decoration: none;' href="{{ route('books.show', $book) }}">{{ $book->Book_title }}</a>
            </td>
            <td>
                <a style='text-decoration: none;' href="{{ route('books.show', $book) }}">{{ $book->First_Name_of_Author }}</a>
            </td>
            <td>
                <a style='text-decoration: none;' href="{{ route('books.show', $book) }}">{{ $book->Last_Name_of_Author }}</a>
            </td>
            <td>
                <form method="POST" action="{{ route('books.destroy', $book) }}">
                    <a class="btn btn-outline-primary" role="button" href='{{ route("books.edit", $book) }}'>Edit</a>
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-primary" type='submit'>Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
@endsection
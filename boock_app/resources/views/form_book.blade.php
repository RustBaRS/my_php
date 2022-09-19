@extends('layout')

@section('title', isset($book) ? 'Edit a book' : 'Add a book')

@section('content')
    <a class="btn btn-primary" href='{{ route("books.index") }}'>Back to list</a>
    <hr>
    <form method = 'POST'
        @if(isset($book))
        action='{{ route("books.update", $book) }}'
        @else
        action='{{ route("books.store") }}'
        @endif>
        @csrf
        @isset($book)
            @method('PUT')
        @endisset
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Book title</label>
            <input name = 'book_title'
            value='{{ isset($book) ? $book->book_title : null}}' 
            type="text" class="form-control" id="formGroupExampleInput" placeholder="Type the Book title here">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">First Name of Author</label>
            <input name = 'first_name'
            value='{{ isset($book) ? $book->first_name : null}}' 
            type="text" class="form-control" id="formGroupExampleInput" placeholder="Type book First Name of Author here">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Last Name of Author</label>
            <input name = 'last_name'
            value='{{ isset($book) ? $book->last_name : null}}' 
            type="text" class="form-control" id="formGroupExampleInput" placeholder="Type book Last Name of Author here">
        </div>
        <button type="submit" class="btn btn-primary">{{isset($book) ? "Edit!" : "Add the Book!"}}</button>
    </form>
@endsection
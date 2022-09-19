@extends('layout')

@section('title', 'Book')

@section('content')
<a class="btn btn-primary" href='{{ route("books.index") }}'>Back to list</a>
<hr>
<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">ID: {{$book->id}}</li>
    <li class="list-group-item">Book: {{ $book->book_title }}</li>
    <li class="list-group-item">Author ID: {{ $book->author_id }}</li>
  </ul>
</div>
<form class='mt-2' method="POST" action="{{ route('books.destroy', $book) }}">
    <a class="btn btn-outline-primary" role="button" href='{{ route("books.edit", $book) }}'>Edit</a>
        @csrf
        @method('DELETE')
    <button class="btn btn-outline-primary" type='submit'>Delete</button>
</form>
@endsection
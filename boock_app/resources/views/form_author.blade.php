@extends('layout')

@section('title', isset($author) ? 'Edit an author' : 'Add an author')

@section('content')
    <a class="btn btn-primary" href='{{ route("authors.index") }}'>Back to list</a>
    <hr>
    <form method = 'POST'
        @if(isset($author))
        action='{{ route("authors.update", $author) }}'
        @else
        action='{{ route("authors.store") }}'
        @endif>
        @csrf
        @isset($author)
            @method('PUT')
        @endisset
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">First Name</label>
            <input name = 'First Name'
            value='{{ isset($author) ? $author->First_Name : null}}' 
            type="text" class="form-control" id="formGroupExampleInput" placeholder="Type author First Name here">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Last Name</label>
            <input name = 'Last Name'
            value='{{ isset($author) ? $author->Last_Name : null}}' 
            type="text" class="form-control" id="formGroupExampleInput" placeholder="Type author Last Name here">
        </div>
        <button type="submit" class="btn btn-primary">{{isset($author) ? "Edit!" : "Add an author!"}}</button>
    </form>
@endsection
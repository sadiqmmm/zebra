@extends('layouts.main')
@section('content')
 <h1>All Books</h1>

 @foreach($books as $book)
        <p>{{ $book->name }}</p>
    @endforeach
@stop
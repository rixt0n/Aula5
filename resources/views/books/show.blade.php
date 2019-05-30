@extends('master')

@section('content')

    <p> <b>Title:</b> {{$book->title}} </p>
    <p> <b>Genre:</b> {{$book->genre}} </p>
    <p> <b>Author:</b> {{$book->author}} </p>
    <p> <b>Publisher:</b> {{$book->publisher}} </p>
    

@endsection
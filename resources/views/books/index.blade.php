@extends('master')

@section('content')
    <p>
        <a href="/books/create">Insert New Book !</a>
    </p>

    <ul>
        @foreach ($books as $book)
        <li>
            <a href="/books/{{$book->id}}">{{$book->title }}</a>
             - {{$book->genre}} - {{$book->author}} {{$book->publisher}}
             <a href="/books/{{$book->id}}/edit">Edit</a>
             -
             <form action="/books/{{$book->id}}" method="POST">
            @csrf
            @method ('DELETE')
            <input type="submit" value="Destroy!">
            
            </form>
        </li>
      
       

        @endforeach

@endsection
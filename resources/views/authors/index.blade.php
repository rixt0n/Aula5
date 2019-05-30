@extends('master')

@section('content')
    <p>
        <a href="/authors/create">Insert New Author !</a>
    </p>

    <ul>
        @foreach ($authors as $author)
        <li>
            <a href="/authors/{{$author->id}}">{{$author->name }}</a>
             - {{$author->nationality}} - 
             <a href="/authors/{{$author->id}}/edit">Edit</a>
             -
             <form action="/authors/{{$author->id}}" method="POST">
            @csrf
            @method ('DELETE')
            <input type="submit" value="Destroy!">
            
            </form>
        </li>
      
       

        @endforeach

@endsection
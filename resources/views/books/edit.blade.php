@extends ('master')

@section('content')

<form action="/books/{{$book->id}}" method="POST">
        @csrf
        @method('PUT') <!--ISTO E PARA A LARAVEL INTERPRETAR O POST COMO PUT-->
        <p>
            Title: <input type="text" name="title" value="{{$book->title}}">

        </p>
        <p>
            Genre: <input type="text" name="genre"  value="{{$book->genre}}">

        </p>
        <p>
            Author: <input type="text" name="author" value="{{$book->author}}">

        </p>
        <p>
            Publisher: <input type="text" name="publisher" value="{{$book->publisher}}">

        </p>
        <p>
            <input type="submit" value="Update !" >

        </p>


    </form>
    

@endsection
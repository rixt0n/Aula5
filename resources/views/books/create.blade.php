@extends ('master')

@section('content')

    <form action="/books" method="POST">
        @csrf
        <p>
            Title: <input type="text" name="title">

        </p>
        <p>
            Genre: <input type="text" name="genre">

        </p>
        <p>
            Author: <input type="text" name="author">

        </p>
        <p>
            Publisher: <input type="text" name="publisher">

        </p>
        <p>
            <input type="submit" value="create">

        </p>


    </form>

@endsection

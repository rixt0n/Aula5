@extends ('master')

@section('content')

    <form action="/authors" method="POST">
        @csrf
        <p>
            Name: <input type="text" name="name">

        </p>
        <p>
            Nationality: <input type="text" name="nationality">

        </p>
        <p>
            <input type="submit" value="create">

        </p>

    </form>

@endsection
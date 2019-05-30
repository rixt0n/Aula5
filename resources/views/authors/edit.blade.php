@extends ('master')
@section('content')

<form action="/authors/{{$author->id}}" method="POST">
        @csrf
        @method('PUT') <!--ISTO E PARA A LARAVEL INTERPRETAR O POST COMO PUT-->
        <p>
            Name: <input type="text" name="name" value="{{$author->name}}">

        </p>
        <p>
            Nationality: <input type="text" name="nationality"  value="{{$author->nationality}}">

        </p>
        <p>
            <input type="submit" value="Update !" >

        </p>


    </form>
    

@endsection
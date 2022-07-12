@extends('templates.base')

@section('pageTitle', 'DC Comics - Home')

@section('pageMain')
    <main>

        <ul>
        @foreach ($arrComics as $comic)

            <li> {{$comic['title']}} </li>

        @endforeach
        </ul>
    </main>


@endsection


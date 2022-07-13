@extends('templates.base')

@section('pageTitle', 'DC Comics - Home')

@section('pageMain')
    <main>
        <img src="{{$comic['thumb']}}" alt="{{ $comic['title']}}">
        <h5>{{$comic['title']}}</h5>
        <p>{{$comic['description']}}</p>
    </main>


@endsection

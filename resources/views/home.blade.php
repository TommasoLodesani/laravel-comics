@extends('templates.base')

@section('pageTitle', 'DC Comics - Home')

@section('pageMain')
    <main>

        <div id="container_icon">

            @foreach ($arrComics as $comic)
                <div class="product">
                    <img src="{{$comic['thumb']}}" alt="">
                    <h5>{{$comic['series']}}</h5>
                </div>
            @endforeach

        </div>



    </main>


@endsection




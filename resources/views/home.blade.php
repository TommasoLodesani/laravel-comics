@extends('templates.base')

@section('pageTitle', 'DC Comics - Home')

@section('pageMain')
    <main>
        <section id="products">
            <div id="container_contents">

                @foreach ($arrComics as $comic)

                     <div class="product">
                        <a href="">
                            <img src="{{$comic['thumb']}}" alt="">
                            <h5>{{$comic['series']}}</h5>

                        </a>
                    </div>


                @endforeach

            </div>

        </section>




    </main>


@endsection




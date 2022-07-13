<header>
    <img src="{{ asset('images/dc-logo.png') }}" alt="logo DC">

    <nav>
      <ul>
        @foreach (config('linkHeader') as $link)
        <li>
          <a href="{{route($link['route'])}}"> {{$link['text']}}</a>
        </li>

        @endforeach
      </ul>
    </nav>



</header>

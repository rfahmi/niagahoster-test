@extends('__layout.app')

@section('content')
<nav class="navbar navbar-expand-md navbar-light bg-white p-0">
    <div class="container   ">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('assets/svg/icon PHP Hosting_My SQL.svg') }}" width="auto" height="50" class="d-inline-block align-top" alt="">
        </a>
        <div class="collapse navbar-collapse d-flex justify-content-end  " id="navbarNavAltMarkup">
            <div class="navbar-nav">
                @foreach ($navs as $nav)
                <a class="nav-item nav-link" href="#">{{$nav}}</a>
                @endforeach
            </div>
          </div>

    </div>
</nav>
<main class="container p-0">
    {{-- Headline --}}
    <div class="mb-4 d-flex flex-row">
        <div class="flex-fill">
            <h1>{{ $headline['text1'] }}</h1>
            <h2>{{ $headline['text2'] }}</h2>
            @foreach ($headline['benefit'] as $i)
            <p>{{ $i }}</p>
            @endforeach
        </div>
        <div class="flex-fill">
            <img src="{{ asset('assets/svg/' . $headline['image'])}}" class="img-fluid" />
        </div>
    </div>

    {{-- Technology --}}
    <div class="mb-4 row d-flex justify-content-center">
        @foreach ($techs as $i)
        <div class="col-3 d-flex flex-column text-center">
            <img src="{{ asset('assets/images/' . $i['image'])}}" class="img-fluid" />
            <span>{{$i['name']}}</span>
        </div>
        @endforeach
    </div>

    {{-- Paket --}}
    <div class="mb-4 row d-flex flex-column align-items-center">
        <h1>{{$paket['title']}}</h1>
        <h3>{{$paket['subtitle']}}</h3>
        <div class="row d-flex justify-content-center">
            @foreach ($paket['type'] as $i)
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$i['name']}}</li>
                    <li class="list-group-item">
                        {{number_format($i['price1'])}}
                        {{$i['price2']}}
                    </li>
                    <li class="list-group-item">{!! $i['feature'] !!}</li>
                </ul>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Benefit --}}
    <div class="mb-4 row d-flex flex-column text-center">
        <h3>{{$benefit['title']}}</h3>
        <div class="row d-flex justify-content-center">
            <?php
                $benefit = array_chunk($benefit['items'],3);
            ?>
            @foreach ($benefit as $i)
                <div class="col-4">
                    <ul class="list-group">
                        @foreach ($i as $j)
                        <li class="list-group-item">
                            <div style="position: absolute;left:8">a</div>
                            {{ $j }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
    
    {{-- Fitur --}}
    <div class="mb-4 row d-flex flex-column text-center">
        <h3>{{$fitur['title']}}</h3>
        <div class="row d-flex justify-content-center container">
            @foreach ($fitur['items'] as $i)
            <div class="col-4 d-flex flex-column">
                <img src="{{ asset('assets/svg/' . $i['image'])}}" class="img-fluid" />
                <strong>{{$i['name']}}</strong>
                <span>{{$i['desc']}}</span>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Headline2 --}}
    <div class="mb-4 d-flex flex-row">
        <div class="flex-fill">
            <h1>{{ $headline2['text1'] }}</h1>
            <h2>{{ $headline2['text2'] }}</h2>
            @foreach ($headline2['benefit'] as $i)
            <p>{{ $i }}</p>
            @endforeach
        </div>
        <div class="flex-fill">
            <img src="{{ asset('assets/svg/' . $headline2['image'])}}" class="img-fluid" />
        </div>
    </div>

    {{-- Modul --}}
    <div class="mb-4 row d-flex flex-column text-center">
        <h3>{{$modules['title']}}</h3>
        <div class="row d-flex container">
            @foreach ($modules['items'] as $i)
            <div class="col-3 d-flex flex-column">
                <span>{{$i}}</span>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Headline3 --}}
    <div class="mb-4 d-flex flex-row">
        <div class="flex-fill">
            <h1>{{ $headline3['text1'] }}</h1>
            <h2>{{ $headline3['text2'] }}</h2>
            @foreach ($headline3['benefit'] as $i)
            <p>{{ $i }}</p>
            @endforeach
        </div>
        <div class="flex-fill">
            <img src="{{ asset('assets/' . $headline3['image'])}}" class="img-fluid" />
        </div>
    </div>
</main>
@endsection
@extends('layouts.app')

@section('content')
    <section id="top_main"></section>

    <section id="center_main" class="bg-dark">

        <div id="series_label" class="text-center">
            <P class="mb-4">CURRENT SERIES</P>
        </div>

        <div class="container">
            <div class="row pt-5">
                @foreach ($comics_array as $item)
                    <div class="col-2 d-flex flex-column py-3">
                        <div class="resize">
                            <img src="{{ $item['thumb'] }}" alt="{{ $item['series'] }} cover">
                        </div>
                        <p class="text-white pt-3 fs-6">{{ strtoupper($item['series']) }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container text-center">
            <button class="mb-4">LOAD MORE</button>
        </div>

    </section>

    <section id="bottom_main">

        <div id="main_navbar" class="container-full bg-primary">
            <div id="main_navbar_section" class="d-flex justify-content-center align-items-center pt-5">

                @foreach($main_navbar as $item)
                    
                    <a href="{{ $item['url'] }}">
                        <div id="logo_img_container" class="d-flex justify-content-center align-items-center">
                          <img src="{{ Vite::asset($item['logo']) }}" alt="{{ $item['text'] }}">
                          <p class="m-0">{{ $item['text'] }}</p>
                        </div>
                    </a>

                @endforeach

            </div>
        </div>

    </section>
@endsection
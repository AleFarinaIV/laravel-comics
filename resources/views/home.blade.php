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

    <section id="bottom_main"></section>
@endsection
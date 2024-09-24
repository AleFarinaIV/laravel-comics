@extends('layouts.app')

@section('content')
    <section id="top_main"></section>

    <section id="center_main" class="bg-dark">
        <div class="container">
            <div class="row">
                @foreach ($comics_array as $item)
                    <div class="col-2 d-flex flex-column g-3 py-4">
                        <div class="resize">
                            <img src="{{ $item['thumb'] }}" alt="{{ $item['series'] }} cover">
                        </div>
                        <p class="text-white pt-3 fs-6">{{ strtoupper($item['series']) }}</p>
                    </div>
                @endforeach
            </div>
        </div>

    </section>

    <section id="bottom_main"></section>
@endsection
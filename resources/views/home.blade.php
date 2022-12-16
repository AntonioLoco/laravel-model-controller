@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Film</h1>
        <div class="row row-cols-4 g-3">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card">
                        <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->original_title }}">
                        <div class="card-body">
                            <h3 class="card-text">
                                Title: {{ $movie->title }}
                            </h3>
                            <h5 class="card-text">
                                Original title: {{ $movie->original_title }}
                            </h5>
                            <p class="card-text">
                                Nationality: {{ $movie->nationality }}
                            </p>
                            <p class="card-text">
                                Data: {{ $movie->date }}
                            </p>
                            <p class="card-text">
                                Voto: {{ $movie->vote }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

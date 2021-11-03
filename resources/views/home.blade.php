@extends('layouts.main');

@section('title', 'Home')

@section('content')

    <section id="ms_movies" class="container">
        
        <div class="row">

            @foreach ($movies as $movie)
            
            <div class="col-5 ms_card text-center">
                <h2>{{ $movie->title }}</h2>
                <h3>{{ $movie->subtitle }}</h3>
                <h5>{{ $movie->nationality }} <h5>
                <p>{{ $movie->date }}</p>
                <p>{{ $movie->vote }}</p>
            </div>

    
            @endforeach

        </div>

    </section>
    
@endsection
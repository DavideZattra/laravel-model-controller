@extends('layouts.main')

@section('title', 'Home')

@section('content')

    <section id="ms_movies" class="container">
        
        <div class="row">

            @foreach ($movies as $movie)
            
            <div class="col-5 ms_card ">
                <p>Titolo: <br><span class="ms_special">{{ $movie->title }}</span></p>
                <p>Titolo originale: <br><span class="ms_special">{{ $movie->original_title }}</span></p>
                <p>Nazionalità: <br><span class="ms_special">{{ $movie->nationality }}</span> <p>
                <p>Data di uscita: <br><span class="ms_special">{{ $movie->date }}</span></p>
                <p>Voto medio degli utenti: <br><span class="ms_special">{{ $movie->vote }}</span></p>
            </div>

    
            @endforeach

        </div>

    </section>
    
@endsection
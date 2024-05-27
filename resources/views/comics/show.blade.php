@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $comic->title }}</h1>
        <div class="card">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
            <div class="card-body">
                <h5 class="card-title">Title: {{ $comic->title }}</h5>
                <p class="card-text">Description: {{ $comic->description }}</p>
                <p class="card-text">Price: {{ $comic->price }}</p>
                <p class="card-text">Series: {{ $comic->series }}</p>
                <p class="card-text">Sale Date: {{ $comic->sale_date }}</p>
                <p class="card-text">Type: {{ $comic->type }}</p>
                <!-- Aggiungi altri campi se necessario -->
                <a href="{{ route('comics.index') }}" class="btn btn-primary">Back to Comics</a>
            </div>
        </div>
    </div>
@endsection

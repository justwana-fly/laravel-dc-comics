@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Comics List</h1>
        <div class="row">
            @foreach($comics as $comic)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

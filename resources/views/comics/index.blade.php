@extends('layouts.app')

@section('content')
<main>
    <div class="container">
        <h1>Comics List</h1>

        <!-- Messaggi di successo o errore -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="row">
            @foreach($comics as $comic)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                        <div class="card-body">
                            <h5 class="card-title color-primary">{{ $comic->title }}</h5>
                            <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary">View Details</a>
                            <!-- Bottone per eliminare -->
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this comic?');" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" id="delete-button-{{ $comic->id }}" class="btn btn-danger mt-2 delete-button">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>
@endsection

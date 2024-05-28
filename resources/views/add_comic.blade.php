<!-- resources/views/add_comic.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Comic</h1>
        <form method="POST" action="{{ route('comics.store') }}">
            @csrf
            
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="thumb">Thumbnail URL</label>
                <input type="text" class="form-control" id="thumb" name="thumb" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" required>
            </div>
            <div class="form-group">
                <label for="series">Series</label>
                <input type="text" class="form-control" id="series" name="series" required>
            </div>
            <div class="form-group">
                <label for="sale_date">Sale Date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" required>
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control" id="type" name="type" required>
            </div>
            <!-- Add other fields here -->
            <button type="submit" class="btn btn-primary">Add Comic</button>
        </form>
    </div>
@endsection

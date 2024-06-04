@extends('adminPanel.app')

@section('content')
    <div class="container">
        <h1>Add New Recipe</h1>
        <form action="{{ route('recipes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="link">Link</label>
                <input type="text" class="form-control" id="link" name="link">
            </div>
            <button type="submit" class="btn btn-primary">Add Recipe</button>
        </form>
    </div>
@endsection

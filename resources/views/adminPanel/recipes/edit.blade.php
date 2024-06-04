@extends('adminPanel.app')

@section('content')
    <div class="container">
        <h1>Edit Recipe</h1>
        <form action="{{ route('recipes.update', $recipe->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $recipe->title }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description">{{ $recipe->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="link">Link</label>
                <input type="text" class="form-control" id="link" name="link" value="{{ $recipe->link }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Recipe</button>
        </form>
    </div>
@endsection

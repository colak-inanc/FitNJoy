@extends('adminPanel.app')

@section('content')
    <div class="container">
        <h1>{{ $recipe->title }}</h1>
        <p>{{ $recipe->description }}</p>
        <p><a href="{{ $recipe->link }}">{{ $recipe->link }}</a></p>
        <a href="{{ route('recipes.edit', $recipe->id) }}" class="btn btn-primary">Edit Recipe</a>
        <form action="{{ route('recipes.destroy', $recipe->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Recipe</button>
        </form>
    </div>
@endsection

@extends('userPanel.app')

@section('content')
    <div class="container mt-4">
        {{--<h2 style="text-align: center; margin-bottom: 10px">Sağlıklı Yemek Tarifleri</h2>--}}
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($recipes as $recipe)
                <div class="col">
                    <a href="{{ $recipe->link }}" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="card">
                            <div class="video">
                                @php
                                    // YouTube linkini embed linkine dönüştürme
                                    $embedLink = str_replace('watch?v=', 'embed/', $recipe->link);
                                @endphp
                                <iframe class="card-img-top" src="{{ $embedLink }}" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $recipe->title }}</h5>
                                <p class="card-text">{{ $recipe->description }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

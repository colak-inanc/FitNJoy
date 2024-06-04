@extends('adminPanel.app')

@section('content')
    <div class="container">
        <h1>Sağlıklı Yemek Tarifleri</h1>
        <a href="{{ route('recipes.create') }}" class="btn btn-primary">Yeni Tarif Ekle</a>
        <table class="table">
            <thead>
            <tr>
                <th>Tarif Adı</th>
                <th>Açıklama</th>
                <th>Tarif Linki</th>
                <th>İşlemler</th>
            </tr>
            </thead>
            <tbody>
            @foreach($recipes as $recipe)
                <tr>
                    <td>{{ $recipe->title }}</td>
                    <td>{{ $recipe->description}}</td>
                    <td><a href="{{ $recipe->link }}">{{ $recipe->link }}</a></td>
                    <td>
                        <a href="{{ route('recipes.show', $recipe->id) }}" class="btn btn-info">Göster</a>
                        <a href="{{ route('recipes.edit', $recipe->id) }}" class="btn btn-primary">Düzenle</a>
                        <form action="{{ route('recipes.destroy', $recipe->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Sil</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

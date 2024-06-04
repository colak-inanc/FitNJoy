@extends('adminPanel.app')

@section('content')
    <div class="container">
        <h2>Yeni Personel Ekle</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Oops!</strong> Bazı sorunlar var.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('personels.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Ad:</label>
                <input type="text" name="name" class="form-control" placeholder="Ad">
            </div>
            <div class="form-group">
                <label for="surname">Soyad:</label>
                <input type="text" name="surname" class="form-control" placeholder="Soyad">
            </div>
            <div class="form-group">
                <label for="email">E-posta:</label>
                <input type="email" name="email" class="form-control" placeholder="E-posta">
            </div>
            <div class="form-group">
                <label for="unvan">Unvan:</label>
                <input type="text" name="unvan" class="form-control" placeholder="Unvan">
            </div>
            <div class="form-group">
                <label for="telefonNo">Telefon No:</label>
                <input type="text" name="telefonNo" class="form-control" placeholder="Telefon No">
            </div>
            <button type="submit" class="btn btn-success">Kaydet</button>
        </form>
    </div>
@endsection

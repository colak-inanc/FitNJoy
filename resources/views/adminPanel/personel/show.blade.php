@extends('adminPanel.app')



@section('content')
    <div class="container">
        <h2>Personel Bilgileri</h2>
        <div class="form-group">
            <strong>Ad:</strong>
            {{ $personel->name }}
        </div>
        <div class="form-group">
            <strong>Soyad:</strong>
            {{ $personel->surname }}
        </div>
        <div class="form-group">
            <strong>E-posta:</strong>
            {{ $personel->email }}
        </div>
        <div class="form-group">
            <strong>Unvan:</strong>
            {{ $personel->unvan }}
        </div>
        <div class="form-group">
            <strong>Telefon No:</strong>
            {{ $personel->telefonNo }}
        </div>
        <a href="{{ route('personels.index') }}" class="btn btn-primary">Geri</a>
    </div>
@endsection

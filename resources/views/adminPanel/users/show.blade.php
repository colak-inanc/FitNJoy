@extends('adminPanel.app')

@section('content')
    <div class="container">
        <h2>Kullanıcı Detayları</h2>
        <div class="form-group">
            <label for="name">Ad:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" readonly>
        </div>
        <div class="form-group">
            <label for="surname">Soyad:</label>
            <input type="text" class="form-control" id="surname" name="surname" value="{{ $user->surname }}" readonly>
        </div>
        <div class="form-group">
            <label for="email">E-posta:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" readonly>
        </div>
        <div class="form-group">
            <label for="gender">Cinsiyet:</label>
            <input type="text" class="form-control" id="gender" name="gender" value="{{ $user->gender }}" readonly>
        </div>
        <div class="form-group">
            <label for="telefonNo">Telefon No:</label>
            <input type="text" class="form-control" id="telefonNo" name="telefonNo" value="{{ $user->telefonNo }}" readonly>
        </div>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Geri Dön</a>
    </div>
@endsection

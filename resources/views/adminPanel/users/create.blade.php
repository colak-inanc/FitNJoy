@extends('adminPanel.app')

@section('content')
    <div class="container">
        <h2>Yeni Kullanıcı Ekle</h2>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Ad:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="surname">Soyad:</label>
                <input type="text" class="form-control" id="surname" name="surname" required>
            </div>
            <div class="form-group">
                <label for="email">E-posta:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="gender">Cinsiyet:</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="male">Erkek</option>
                    <option value="female">Kadın</option>
                </select>
            </div>
            <div class="form-group">
                <label for="telefonNo">Telefon No:</label>
                <input type="text" class="form-control" id="telefonNo" name="telefonNo" required>
            </div>
            <button type="submit" class="btn btn-success">Kaydet</button>
        </form>
    </div>
@endsection

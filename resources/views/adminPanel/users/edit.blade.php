@extends('adminPanel.app')

@section('content')
    <div class="container">
        <h2>Kullanıcıyı Düzenle</h2>
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Ad:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
            </div>
            <div class="form-group">
                <label for="surname">Soyad:</label>
                <input type="text" class="form-control" id="surname" name="surname" value="{{ $user->surname }}" required>
            </div>
            <div class="form-group">
                <label for="email">E-posta:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
            </div>
            <div class="form-group">
                <label for="gender">Cinsiyet:</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="Erkek" {{ $user->gender == 'Erkek' ? 'selected' : '' }}>Erkek</option>
                    <option value="Kadın" {{ $user->gender == 'Kadın' ? 'selected' : '' }}>Kadın</option>
                </select>
            </div>
            <div class="form-group">
                <label for="telefonNo">Telefon No:</label>
                <input type="text" class="form-control" id="telefonNo" name="telefonNo" value="{{ $user->telefonNo }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Güncelle</button>
        </form>
    </div>
@endsection

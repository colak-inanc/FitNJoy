<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitNJoy - Üye Kayıt</title>
    <link rel="stylesheet" href="{{asset("auth/css/member_registration.css")}}">
</head>
<body>
<div class="container">
    <h2>Üye Kayıt Formu</h2>
    <form id="registrationForm" action="{{route("registerP")}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">

        </div>
        <div class="form-group">
            <label for="name">Ad:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="surname">Soyad:</label>
            <input type="text" id="surname" name="surname" required>
        </div>
        <div class="form-group">
            <label for="email">E-posta:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Şifre:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="telefonNo">Telefon:</label>
            <input type="tel" id="telefonNo" name="telefonNo" required>
        </div>
        <div class="form-group">
            <label for="birthday">Doğum Tarihi:</label>
            <input type="date" id="birthday" name="birthday" required>
        </div>
        <div class="form-group">
            <label for="gender">Cinsiyet:</label>
            <div class="radio-group">
                <label><input type="radio" name="gender" id="gender" value="Erkek" required> Erkek</label>
                <label><input type="radio" name="gender" id="gender" value="Kadın" required> Kadın</label>
            </div>
        </div>
        <button type="submit">Kayıt Ol</button>
    </form>
</div>
<script>
    function previewImage(event) {
        const input = event.target;
        const preview = document.getElementById('profileImagePreview');
        const reader = new FileReader();

        reader.onload = function() {
            preview.style.backgroundImage = `url(${reader.result})`;
            preview.textContent = '';  // Resim yüklendiğinde "Resim Ekle" yazısını kaldır
        };

        reader.readAsDataURL(input.files[0]);
    }
</script>
</body>
</html>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitNJoy - Giriş Yap</title>
    <link rel="stylesheet" href="{{ asset('auth/css/login.css') }}">
</head>
<body>
<header>
    <div class="container">
        <img src="{{ asset('auth/img/FitNJoy_logo.png') }}" alt="FitNJoy Logo" class="logo">
    </div>
</header>
<main>
    <div class="container">
        <h2>Giriş Yap</h2>
        <form action="{{ route('loginP') }}" method="POST" class="login-form">
            @csrf
            <div class="form-group">
                <label for="email">E-posta Adresi:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Şifre:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Giriş Yap</button>
        </form>
        <a href="{{ route('register') }}" class="signup-button">Üye Ol</a>
    </div>
</main>
<footer>
    <div class="container">
        <p>&copy; 2024 FitNJoy. Tüm hakları saklıdır.</p>
    </div>
</footer>
</body>
</html>

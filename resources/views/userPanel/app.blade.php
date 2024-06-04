<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitNJoy - Anasayfa</title>
    <link rel="stylesheet" href="{{asset("login/css/homepage.css")}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>
<body>
<header>
    <div class="container">
        <div class="logo-nav">
            <img src="{{asset("login/img/FitNJoy_logo.png")}}" alt="FitNJoy Logo" class="logo">
            <nav>
                <ul>
                    <li><a href="{{route("userPanel.home")}}">Ana Sayfa</a></li>
                    <li><a href="{{route("userPanel.klinikKadro")}}">Personellerimiz</a></li>
                    <li><a href="{{route("userPanel.besins")}}">Besin Değerleri</a></li>
                    <li><a href="{{route("userPanel.recipes")}}">Diyet Tarifler</a></li>
                    <li><a href="{{route("login")}}">Giriş Yap</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<main>
   @yield("content")
</main>
<footer>
    <div class="container">
        <p>&copy; 2024 FitNJoy. Tüm hakları saklıdır.</p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

{{--
@extends("userPanel.app")


@section("content")
    <div class="container">
        <section class="intro">
            <h2>FitNJoy'a Hoş Geldiniz!</h2>
            <p>Sağlıklı yaşam ve beslenme konusunda en iyi hizmetleri sunmak için buradayız.<br> Size özel diyet tarifleri, besin değerleri ve uzman klinik kadromuzla sağlıklı bir hayatı keşfedin.</p>
        </section>
        <section class="features">
            <!--<h2>Öne Çıkanlar</h2>-->
            <div class="feature">
                <img src="{{asset("auth/img/diyet_tarif.jpg")}}" alt="Diyet Tarifler">
                <h3>Diyet Tarifler</h3>
                <p>Sağlıklı ve lezzetli tariflerle formda kalın.</p>
            </div>
            <div class="feature">
                <img src="{{asset("auth/img/clinical.jpg")}}" alt="Klinik Kadro">
                <h3>Klinik Kadro</h3>
                <p>Uzman ekibimiz her zaman yanınızda.</p>
            </div>
            <div class="feature">
                <img src="{{asset("auth/img/besin.jpg")}}" alt="Besin Değerleri">
                <h3>Besin Değerleri</h3>
                <p>Yiyeceklerinizin besin değerlerini öğrenin.</p>
            </div>
        </section>
        <section class="information">
            <h2>Bilgilendirmeler</h2>
            <p>FitNJoy olarak, sağlıklı yaşam hakkında bilmeniz gereken her şeyi size sunuyoruz. Diyet, egzersiz ve sağlıklı yaşam hakkında daha fazla bilgi edinin.</p>
        </section>
    </div>


@endsection
--}}

@extends("userPanel.app")

@section("content")
    <!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitNJoy - Anasayfa</title>
    <link rel="stylesheet" href="{{asset("auth/css/deneme.css")}}">
</head>
    <div class="container">
        <section class="intro">
            <h2>FitNJoy'a Hoş Geldin {{ ucfirst(strtolower(Auth::user()->name)) }} !</h2>
            <p>Sağlıklı yaşam ve fitness konusunda en iyi hizmetleri sunmak için buradayız.<br> Size özel antrenman programları, beslenme planları ve uzman eğitmenlerimizle fit bir hayatı keşfedin.</p>
            <button id="learnMoreBtn">Daha Fazla Bilgi</button>
        </section>
        <section class="features">
            <div class="feature">
                <img src="{{asset("auth/img/workouts.jpg")}}" alt="Antrenman Programları">
                <h3>Antrenman Programları</h3>
                <p>Her seviyeye uygun, kişiselleştirilmiş antrenman programlarıyla hedeflerinize ulaşın.</p>
            </div>
            <div class="feature">
                <img src="{{asset("auth/img/trainers.jpg")}}" alt="Uzman Eğitmenler">
                <h3>Uzman Eğitmenler</h3>
                <p>Deneyimli ve sertifikalı eğitmenlerimizle profesyonel destek alın.</p>
            </div>
            <div class="feature">
                <img src="{{asset("auth/img/nutritions.jpg")}}" alt="Beslenme Planları">
                <h3>Beslenme Planları</h3>
                <p>Sağlıklı ve dengeli beslenme planlarıyla fit kalın.</p>
            </div>
        </section>
        <section class="information">
            <h2>Bilgilendirmeler</h2>
            <p>FitNJoy olarak, sağlıklı yaşam hakkında bilmeniz gereken her şeyi size sunuyoruz. Fitness, beslenme ve sağlıklı yaşam hakkında daha fazla bilgi edinin.</p>
        </section>
        <section class="tips">
            <h2>Sağlıklı Yaşam İpuçları</h2>
            <div class="tip" id="tip1">
                <h3>Su İçmenin Önemi</h3>
                <p>Günlük yeterli miktarda su içmek vücudunuzun düzgün çalışması için çok önemlidir.</p>
            </div>
            <div class="tip" id="tip2">
                <h3>Yeterli Uyku</h3>
                <p>Her gece 7-8 saat uyumak, genel sağlığınızı ve yaşam kalitenizi iyileştirir.</p>
            </div>
            <div class="tip" id="tip3">
                <h3>Dengeli Beslenme</h3>
                <p>Dengeli ve besleyici yiyecekler tüketmek, enerjinizi yüksek tutar ve hastalıklara karşı direncinizi artırır.</p>
            </div>
        </section>
    </div>

<script src="{{asset("auth/js/homepage.js")}}"></script>

</body>
</html>
@endsection

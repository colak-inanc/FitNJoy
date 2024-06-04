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
                <img src="{{asset("login/img/diyet_tarif.jpg")}}" alt="Diyet Tarifler">
                <h3>Diyet Tarifler</h3>
                <p>Sağlıklı ve lezzetli tariflerle formda kalın.</p>
            </div>
            <div class="feature">
                <img src="{{asset("login/img/clinical.jpg")}}" alt="Klinik Kadro">
                <h3>Klinik Kadro</h3>
                <p>Uzman ekibimiz her zaman yanınızda.</p>
            </div>
            <div class="feature">
                <img src="{{asset("login/img/besin.jpg")}}" alt="Besin Değerleri">
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

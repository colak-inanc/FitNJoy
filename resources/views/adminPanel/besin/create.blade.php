@extends("adminPanel.app")

@section("content")

    <div class="container">
        <h2>Yeni Besin Ekle</h2>
        <form action="{{ route('besins.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="besin_adi">Besin Adı</label>
                <input type="text" class="form-control" id="besin_adi" name="besin_adi">
            </div>
            <div class="form-group">
                <label for="lif">Lif</label>
                <input type="text" class="form-control" id="lif" name="lif">
            </div>
            <div class="form-group">
                <label for="protein">Protein</label>
                <input type="text" class="form-control" id="protein" name="protein">
            </div>
            <div class="form-group">
                <label for="karbonhidrat">Karbonhidrat</label>
                <input type="text" class="form-control" id="karbonhidrat" name="karbonhidrat">
            </div>
            <div class="form-group">
                <label for="yag">Yağ</label>
                <input type="text" class="form-control" id="yag" name="yag">
            </div>
            <div class="form-group">
                <label for="kalori">Kalori</label>
                <input type="text" class="form-control" id="kalori" name="kalori">
            </div>
            <button type="submit" class="btn btn-primary">Besin Ekle</button>
        </form>
    </div>

@endsection

@extends("adminPanel.app")

@section("content")

    <div class="container">
        <h2>Besini Düzenle</h2>
        <form action="{{ route('besins.update', $besin->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="besin_adi">Besin Adı</label>
                <input type="text" class="form-control" id="besin_adi" name="besin_adi" value="{{ $besin->besin_adi }}">
            </div>
            <div class="form-group">
                <label for="lif">Lif</label>
                <input type="text" class="form-control" id="lif" name="lif" value="{{ $besin->lif }}">
            </div>
            <div class="form-group">
                <label for="protein">Protein</label>
                <input type="text" class="form-control" id="protein" name="protein" value="{{ $besin->protein }}">
            </div>
            <div class="form-group">
                <label for="karbonhidrat">Karbonhidrat</label>
                <input type="text" class="form-control" id="karbonhidrat" name="karbonhidrat" value="{{ $besin->karbonhidrat }}">
            </div>
            <div class="form-group">
                <label for="yag">Yağ</label>
                <input type="text" class="form-control" id="yag" name="yag" value="{{ $besin->yag }}">
            </div>
            <div class="form-group">
                <label for="kalori">Kalori</label>
                <input type="text" class="form-control" id="kalori" name="kalori" value="{{ $besin->kalori }}">
            </div>
            <button type="submit" class="btn btn-primary">Güncelle</button>
        </form>
    </div>

@endsection

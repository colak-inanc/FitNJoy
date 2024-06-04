@extends("adminPanel.app")


@section("content")

    <div class="container">
        <h2>Besin Değerleri</h2>
        <a href="{{ route('besins.create') }}" class="btn btn-success">Yeni Besin Ekle</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>Besin Adı</th>
                <th>Lif oranı(g)</th>
                <th>Protein</th>
                <th>Karbonhidrat</th>
                <th>Yağ</th>
                <th>Kalori</th>
                <th width="280px">İşlemler</th>
            </tr>
            @foreach ($besins as $besin)
                <tr>
                    <td>{{$besin->besin_adi}}</td>
                    <td>{{ $besin->lif}}</td>
                    <td>{{ $besin->protein }}</td>
                    <td>{{ $besin->karbonhidrat }}</td>
                    <td>{{ $besin->yag }}</td>
                    <td>{{ $besin->kalori }}</td>
                    <td>
                        <form action="{{ route('besins.destroy',$besin->id) }}" method="POST">

                            <a class="btn btn-primary" href="{{ route('besins.edit',$besin->id) }}">Düzenle</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Sil</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>


@endsection

@extends("adminPanel.app")


@section("content")
    <div class="container">
        <h2>Personel Listesi</h2>
        <a href="{{ route('personels.create') }}" class="btn btn-success">Yeni Personel Ekle</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Ad</th>
                <th>Soyad</th>
                <th>E-posta</th>
                <th>Unvan</th>
                <th>Telefon No</th>
                <th width="280px">İşlemler</th>
            </tr>
            @foreach ($personels as $personel)
                <tr>
                    <td>{{$personel->id}}</td>
                    <td>{{ $personel->name }}</td>
                    <td>{{ $personel->surname }}</td>
                    <td>{{ $personel->email }}</td>
                    <td>{{ $personel->unvan }}</td>
                    <td>{{ $personel->telefonNo }}</td>
                    <td>
                        <form action="{{ route('personels.destroy',$personel->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('personels.show',$personel->id) }}">Göster</a>
                            <a class="btn btn-primary" href="{{ route('personels.edit',$personel->id) }}">Düzenle</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Sil</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection

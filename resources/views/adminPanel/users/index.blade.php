@extends("adminPanel.app")

@section("content")
    <div class="container">
        <h2>Kullanıcı Listesi</h2>


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
                <th>Cinsiyet</th>
                <th>Telefon No</th>
                <th width="280px">İşlemler</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->surname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->telefonNo }}</td>
                    <td>
                        <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Göster</a>
                            <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Düzenle</a>
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

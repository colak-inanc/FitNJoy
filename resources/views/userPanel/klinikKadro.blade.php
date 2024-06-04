@extends('userPanel.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 style="text-align: center">Personellerimiz</h2>

        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-striped table-hover" >
                <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Ad</th>
                    <th scope="col">Soyad</th>
                    <th scope="col">E-posta</th>
                    <th scope="col">Unvan</th>
                    <th scope="col">Telefon No</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($personels as $personel)
                    <tr>
                        <th scope="row">{{ $personel->id }}</th>
                        <td>{{ $personel->name }}</td>
                        <td>{{ $personel->surname }}</td>
                        <td>{{ $personel->email }}</td>
                        <td>{{ $personel->unvan }}</td>
                        <td>{{ $personel->telefonNo }}</td>
                        <td class="text-center">

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center">

        </div>
    </div>
@endsection

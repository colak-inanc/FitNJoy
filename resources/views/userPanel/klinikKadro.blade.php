@extends('userPanel.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            {{--<h2 style="text-align: center">Personellerimiz</h2>--}}
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-striped table-hover">
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
                        <td>
                            @if($personel->unvan == 'PT' || $personel->unvan == 'Diyetisyen')
                                <a href="mailto:{{ $personel->email }}?subject=Danışmanlık%20Talebi&body=Merhaba%20{{ ucfirst($personel->name) }},%0A%0ASize%20danışmanlık%20almak%20istiyorum.%20Detayları%20görüşmek%20için%20benimle%20iletişime%20geçebilirsiniz.%0A%0ASaygılarımla,%0A{{ Auth::user()->name }}">
                                    {{ $personel->email }}
                                </a>
                            @else
                                {{ $personel->email }}
                            @endif
                        </td>
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

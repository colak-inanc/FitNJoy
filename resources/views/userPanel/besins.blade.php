@extends('userPanel.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
           {{-- <h2>Besin Değerleri</h2> --}}

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
                    <th scope="col">Besin Adı (100g)</th>
                    <th scope="col">Lif (g)</th>
                    <th scope="col">Protein (g)</th>
                    <th scope="col">Karbonhidrat (g)</th>
                    <th scope="col">Yağ (g)</th>
                    <th scope="col">Kalori (kcal)</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($besins as $besin)
                    <tr>

                        <td>{{ $besin->besin_adi }}</td>
                        <td>{{ $besin->lif }}</td>
                        <td>{{ $besin->protein }}</td>
                        <td>{{ $besin->karbonhidrat }}</td>
                        <td>{{ $besin->yag }}</td>
                        <td>{{ $besin->kalori }}</td>
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

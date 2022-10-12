@extends('Layout.main')

@section('content')
    <h1 class="text-center">Data Diri Anda</h1>
    <hr>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <table class="table table-bordered">
                <tr>
                    <th>Nama</th>
                    <td>{{ $mahasiswa['nama'] }}</td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>{{ $mahasiswa['tempat_lahir'] }}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ $mahasiswa['tanggal_lahir'] }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{ $mahasiswa['jenis_kelamin'] }}</td>
                </tr>
                <tr>
                    <th>Prodi</th>
                    <td>{{ $mahasiswa['prodi'] }}</td>
                </tr>
                <tr>
                    <th>Hobbi</th>
                    <td>
                        @foreach ($mahasiswa['hobbi'] as $hobbi)
                            {{ $hobbi }},
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th>Umur</th>
                    <td>{{ $mahasiswa['umur'] }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $mahasiswa['alamat'] }}</td>
                </tr>
            </table>
            <div class="row">
                <a class="btn btn-success" href="{{ route('index') }}">Back To Form</a>
            </div>
        </div>
    </div>
@endsection

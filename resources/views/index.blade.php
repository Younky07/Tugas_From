@extends('Layout.main')

@section('content')
    <h1 class="text-center">Form Data Diri</h1>
    <hr>
    <form action="{{ route('store') }}" method="post" class="row justify-content-center">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
        </div>
        <div class="mb-3">
            <label for="tempat_lahir" class="form-label">tempat-lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                placeholder="Masukkan tempat lahir">
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">tanggal-lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                placeholder="Masukkan tanggal lahir">
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">jenis-kelamin</label>
            <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="prodi">Prodi</label>
            <select name="prodi" class="form-control" id="prodi">
                <option value="Pendidikan Teknik Informatika">Pendidikan Teknik Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Teknologi Rekayasa Perangkat Lunak">Teknologi Rekayasa Perangkat Lunak</option>
                <option value="Ilmu Komputer">Ilmu Komputer</option>
            </select>
        </div>
        {{-- Hobbi --}}
        <div class="mb-3">
            <label for="hobbi" class="form-label">Hobbi</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Membaca" id="hobbi1" name="hobbi[]">
                <label class="form-check-label" for="hobbi1">
                    Membaca
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Menulis" id="hobbi2" name="hobbi[]">
                <label class="form-check-label" for="hobbi2">
                    Menulis
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Treveling" id="hobbi3" name="hobbi[]">
                <label class="form-check-label" for="hobbi3">
                    Treveling
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Shoping" id="hobbi4" name="hobbi[]">
                <label class="form-check-label" for="hobbi4">
                    Shoping
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

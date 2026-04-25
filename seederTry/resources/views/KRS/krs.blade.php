@extends('layout.template')

@section('content')
<div class="container mt-4">

    <h2 class="mb-3">Data KRS</h2>

    <div class="card">
        <div class="card-body">

            <p>
                halaman ini menampilkan data KRS yang ada di database, dengan fitur tambah, edit, dan hapus data KRS
            </p>

            <a href="#" class="btn btn-primary mb-3">Tambah Data</a>

            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>NPM</th>
                        <th>Kode Matakuliah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataKRS as $krs)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $krs->npm }}</td>
                        <td>{{ $krs->kode_matakuliah }}</td>
                        <td>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                            <button class="btn btn-warning btn-sm">Edit</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection

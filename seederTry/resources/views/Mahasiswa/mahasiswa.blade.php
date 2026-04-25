@extends('layout.template')

@section('content')
<div class="container mt-4">

    <h2 class="mb-3">Data Mahasiswa</h2>

    <div class="card">
        <div class="card-body">

            <p>
                halaman ini menampilkan data mahasiswa yang ada di database, dengan fitur tambah, edit, dan hapus data mahasiswa
            </p>

            <a href="#" class="btn btn-primary mb-3">Tambah Data</a>

            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>NPM</th>
                        <th>NIDN</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataMahasiswa as $mahasiswa)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $mahasiswa->npm }}</td>
                        <td>{{ $mahasiswa->nidn }}</td>
                        <td>{{ $mahasiswa->nama }}</td>
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

@extends('modules.auth.admin.dashboard.index')

@section('admin')
    <div class="container">
        <h3>Fasilitas Kampung Durian Rancamaya</h3>
        <a href="/admin/fasilitas/create">
            <button type="submit" class="btn btn-primary mt-3">
                Buat Fasilitas Baru
            </button>
        </a>
        <div class="container-table mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama Fasilitas</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($facilities as $facility)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>Bruh.JPG</td>
                            <td>{{ $facility->name }}</td>
                            <td>{{ $facility->desc }}</td>
                            <td>Edit, View, Delete</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

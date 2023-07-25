@extends('modules.auth.admin.dashboard.index')

@section('admin')
    <div class="container">
        <h3>Toko Kampung Durian Rancamaya</h3>
        <a href="/admin/toko/create">
            <button type="submit" class="btn btn-primary mt-3">
                Buat Toko Baru
            </button>
        </a>
        <div class="container-table mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Kuantitas</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($shops as $shop)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>Bruh.JPG</td>
                            <td>{{ $shop->name }}</td>
                            <td>{{ $shop->desc }}</td>
                            <td>Rp. {{ $shop->price }}</td>
                            <td>{{ $shop->qty }} Pcs</td>
                            <td>Edit, View, Delete</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

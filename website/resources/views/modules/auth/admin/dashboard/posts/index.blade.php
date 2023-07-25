@extends('modules.auth.admin.dashboard.index')

@section('admin')
    <div class="container">
        <h3>Post Kampung Durian Rancamaya</h3>
        <a href="/admin/posts/create">
            <button type="submit" class="btn btn-primary mt-3">
                Buat Post Baru
            </button>
        </a>

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="container-table mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>Bruh.JPG</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->desc }}</td>
                            <td>Edit, View, Delete</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

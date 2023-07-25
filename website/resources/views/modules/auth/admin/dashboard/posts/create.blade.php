@extends('modules.auth.admin.dashboard.index')

@section('admin')
    <div class="container" style="width: 80%">
        <a href="/admin/posts" class="mt-4 text-decoration-none">
            <i class="bi bi-arrow-left-circle-fill"></i>
            Kembali
        </a>
        <h2 class="mt-3">Buat Post Baru</h2>
        <hr>

        <form action="/admin/posts" method="post">
            @csrf
            <div class="row mb-4">
                <div class="col">
                    <label for="title">Judul</label>
                    <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}"
                        required />
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <label for="desc">Deskripsi</label>
                    <input class="form-control" type="text" name="desc" id="desc" value="{{ old('desc') }}"
                        required />
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <label for="image">Image</label>
                    <input class="form-control" type="file" name="image" id="image" />
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection

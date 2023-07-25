@extends('modules.auth.admin.dashboard.index')

@section('admin')
    <div class="container" style="width: 80%">
        <a href="/admin/toko" class="mt-4 text-decoration-none">
            <i class="bi bi-arrow-left-circle-fill"></i>
            Kembali
        </a>
        <h2 class="mt-3">Buat Fasilitas Baru</h2>
        <hr>

        <form action="/admin/fasilitas" method="post">
            @csrf
            <div class="row mb-4">
                <div class="col">
                    <label for="name">Nama Fasilitas</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}"
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
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection

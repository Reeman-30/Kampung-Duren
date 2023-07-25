@extends('index')

@section('content')
    <div class="container mt-4">
        <h1>Variasi Durian</h1>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @if ($shops->count() > 0)
                @foreach ($shops as $shop)
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $shop->name }}</h5>
                                <small class="card-text">Rp. {{ $shop->price }}</small>
                                <p class="card-text">Tersedia: {{ $shop->qty }} buah</p>
                                <p class="card-text">{{ $shop->desc }}</p>
                                <button type="submit" class="btn btn-success">
                                    Beli Sekarang
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h3>No Data!</h3>
            @endif
        </div>
    </div>
@endsection

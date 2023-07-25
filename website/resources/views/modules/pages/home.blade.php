@extends('index')

@section('content')
    <section class="bg-image">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="text-center">
                <h1 class="text-light lh-lg">Selamat Datang di Website</h1>
                <h1 class="text-light lh-lg">Kampung Durian Rancamaya Bogor</h1>
            </div>
        </div>
    </section>

    <div class="container-md">
        <h3 class="text-center mt-3">Sejarah</h3>
        <div class="row mt-4" style="max-width: 2048px; min-width: auto;">
            <div class="row">
                <div class="col-md-4 d-flex justify-content-center">
                    <img src="{{ url('images/history.jpg') }}" class="img-fluid rounded-center" style="width: 100%"
                        alt="...">
                </div>
                <div class="col-md-8">
                    <div class="mx-5">
                        <h3 class="">Sejarah Kampung Durian Rancamaya</h3>
                        <p class="">
                            Cerita ini berawal sekitar tahun 1882, tepatnya di kampung yang sekarang
                            menjadi kampung ikonik yaitu kampung legok petir, dimana kampung teresebut terdapat sebuah pohon
                            duren tua yang berusia sekitar 100 tahun lebih dengan tinggi mencapai 20 meter dengan diameter
                            mencapai 2 meter lebih dan selalu menjadi santapan favorit para raja dan keluarga kerajaan
                            pajajaran.
                        </p>
                        <p class="">
                            Buah duren tersebut mempunyai nama yaitu "DUREN SI DEMPOK" mempunyai ciri-ciri khusus yaitu:
                        </p>
                        <p class="">
                        <ol>
                            <li>Tekstur daging yang tebal dan manis</li>
                            <li>Rasanya legit</li>
                            <li>Daging buahnya bewarna kuning</li>
                            <li>Ukuran buahnya besar, bahkan paling kecil mempunyai berat sekitar 5KG/buahnya.</li>
                        </ol>
                        </p>
                        <a href="/tentang-kami" class="btn btn-primary mt-2">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-md mt-5">
        <h3 class="text-center">Event dan Berita</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @if ($posts->count() > 0)
                @foreach ($posts as $post)
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->desc }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h3>No Data!</h3>
            @endif
        </div>
    </div>

    <div class="container-md mt-5">
        <h3 class="text-center">Fasilitas</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
            @if ($facilities->count() > 0)
                @foreach ($facilities as $facility)
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $facility->name }}</h5>
                                <p class="card-text">{{ $facility->desc }}</p>
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

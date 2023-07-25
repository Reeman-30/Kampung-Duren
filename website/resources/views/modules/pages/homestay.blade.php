@extends('index')

@section('content')
    <div class="container mt-4">
        <h1>Homestay</h1>
        <small>Penginapan Tersedia</small>
        <div class="row row-cols-3 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <img src="{{ url('images/kp-durian-homestay.jpg') }}" class="card-img-top" alt="Homestay">
                    <div class="card-body">
                        <h4 class="card-title">Homestay Kampung Durian Rancamaya</h4>
                        <small>Dapat menampung 12 Orang</small>
                        <p class="card-text mt-2">Fasilitas :</p>
                        <p class="card-text">
                        <ol>
                            <li>Musholla</li>
                            <li>Perlengkapan Mandi</li>
                            <li>Kamar Tidur 2</li>
                            <li>Televisi</li>
                            <li>Kamar Mandi</li>
                        </ol>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title"><span id="price">80.000</span> / malam</h3>
                        <form action="">
                            <section class="mt-4">
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="check-in" class="form-label">Tanggal Check-In</label>
                                        <input type="date" class="form-control" id="check-in" style="max-width: 512px">
                                    </div>
                                    <div class="col mb-3">
                                        <label for="check-out" class="form-label">Tanggal Check-Out</label>
                                        <input type="date" class="form-control" id="check-out" style="max-width: 512px">
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="jumlah-orang" class="form-label">Jumlah orang</label>
                                    <input type="number" class="form-control" id="jumlah-orang" style="max-width: 512px"
                                        min=1 max=12 onchange="changePrice()">
                                </div>
                                <div class="d-grid gap-2 mt-5">
                                    <button type="submit"
                                        class="btn btn-success position-absolute bottom-0 start-50 translate-middle-x mb-3"
                                        style="width: 90%">
                                        Pesan Sekarang
                                    </button>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

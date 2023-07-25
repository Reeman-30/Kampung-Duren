@extends('index')

@section('content')
    <div class="container-md mt-4">
        <h2 class="text-center mb-3">Tentang Kami</h2>
        <div class="card mb-3">
            <img src="{{ url('images/history.jpg') }}" class="card-img-top" alt="Kampung Durian">
            <div class="card-body">
                <h3 class="card-title text-center">Sejarah Kampung Durian Rancamaya</h3>
                <p class="card-text">
                    Cerita ini berawal sekitar tahun 1882, tepatnya di kampung yang sekarang
                    menjadi kampung ikonik yaitu kampung legok petir, dimana kampung teresebut terdapat sebuah pohon
                    duren tua yang berusia sekitar 100 tahun lebih dengan tinggi mencapai 20 meter dengan diameter
                    mencapai 2 meter lebih dan selalu menjadi santapan favorit para raja dan keluarga kerajaan
                    pajajaran.
                </p>
                <p class="card-text">
                    Buah duren tersebut mempunyai nama yaitu "DUREN SI DEMPOK" mempunyai ciri-ciri khusus yaitu:
                </p>
                <p class="card-text">
                <ol>
                    <li>Tekstur daging yang tebal dan manis</li>
                    <li>Rasanya legit</li>
                    <li>Daging buahnya bewarna kuning</li>
                    <li>Ukuran buahnya besar, bahkan paling kecil mempunyai berat sekitar 5KG/buahnya.</li>
                </ol>
                </p>
                <p>
                    Seiring usia dan kurangnya pemahaman tentang regenerasi ataupun pembibitan SI DEMPOK akhirnya
                    juga mati termakan usia, dari sinilah awal mula Rancamaya terkenal sebagai daerah penghasil
                    duren kualitas super, walaupun diwilayah lain di bumi Nusantara banyak juga menghasilkan buah
                    duren, akan tetapi orang akan merasa belum makan duren apabila belum mencicipi duren asli
                    rancamaya.
                </p>
                <p>
                    Seperti kata pepatah... <i>Tak Kenal Maka Tak Sayang</i>... para pencinta buah duren akan
                    menjadi makin sayang setelah mampir ke kampung Duren Legok Petir Rancamaya dan mencicipi buah
                    duren lokal dengan kualitas internasional dengan nuansa pedesaan asli dengan latar belakang
                    salak sebagai pelindung dan pengayom kota bogor
                </p>
            </div>
        </div>
    </div>

    <div class="container mt-4 mb-4">
        <h1 class="text-center">Info</h1>
        <h3 class="text-center mb-5">Hubungi Kami</h3>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <section class="d-flex flex-row">
                    <i class="bi bi-geo-alt-fill" style="font-size: 50px"></i>
                    <p class="p-3">Gg. Narsipah No.53, RT.04/RW.07, Rancamaya, Kec. Bogor Sel., Kota Bogor, Jawa Barat
                        16139</p>
                </section>
                <section class="d-flex flex-row">
                    <i class="bi bi-telephone-forward" style="font-size: 50px"></i>
                    <p class="p-4 text-decoration-underline fw-bold">085894967532</p>
                </section>
            </div>
            <div class="col-md-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.8195328025054!2d106.82712507444714!3d-6.669271665198166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c9c4650391cb%3A0xd94de4970ef2c562!2sKampung%20Durian%20Rancamaya!5e0!3m2!1sid!2sid!4v1689352115387!5m2!1sid!2sid"
                    width="500" height="320" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    </div>
@endsection

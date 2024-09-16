@extends('layout_home.app')

@section('content')
<main>
    <!-- Bagian Tentang Kami -->
    <section class="about-us py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="display-5">Tentang Kami</h1>
                <p class="lead"><strong>CERDAS, KREATIF, PEDULI, BERMODERASI, DAN BERWAWASAN GLOBAL</strong></p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <p class="text-center">SMAK St. Bonaventura merupakan sekolah swasta Katolik yang berada di Jl. Diponegoro, Nomor 45, Kota Madiun. Lokasi yang sangat strategis dan berada di tengah kota Madiun.</p>
                    <p class="text-center">Sekolah kami memiliki visi “Dijiwai semangat Kristiani unggul dalam karakter, intelektual, peduli lingkungan, bermoderasi, dan berwawasan global”.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Cards -->
    <section class="cards py-5 bg-light">
        <div class="container">
            <div class="row text-center">
                <!-- Card Visi dan Misi -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <i class="bi bi-eye fs-1 mb-3"></i>
                            <h5 class="card-title">Visi dan Misi</h5>
                            <p class="card-text">Kenali visi dan misi sekolah kami yang menjadi landasan pendidikan.</p>
                            <a href="{{ url('tentang-kami/visi-misi') }}" class="btn btn-primary">Lihat</a>
                        </div>
                    </div>
                </div>

                <!-- Card Sejarah Singkat -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <i class="bi bi-calendar fs-1 mb-3"></i>
                            <h5 class="card-title">Sejarah Singkat</h5>
                            <p class="card-text">Pelajari sejarah singkat dari pelindung sekolah kami, Santo Bonaventura.</p>
                            <a href="{{ url('tentang-kami/sejarah-singkat') }}" class="btn btn-primary">Lihat</a>
                        </div>
                    </div>
                </div>

                <!-- Card Struktur Organisasi -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <i class="bi bi-diagram-3 fs-1 mb-3"></i>
                            <h5 class="card-title">Struktur Organisasi</h5>
                            <p class="card-text">Temui struktur organisasi dan tim pengajar kami.</p>
                            <a href="{{ url('tentang-kami/struktur-organisasi') }}" class="btn btn-primary">Lihat</a>
                        </div>
                    </div>
                </div>

                <!-- Card Guru -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <i class="bi bi-person fs-1 mb-3"></i>
                            <h5 class="card-title">Guru</h5>
                            <p class="card-text">Kenali para guru yang akan membimbing Anda.</p>
                            <a href="{{ url('tentang-kami/guru') }}" class="btn btn-primary">Lihat</a>
                        </div>
                    </div>
                </div>

                <!-- Card Fasilitas -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <i class="bi bi-house fs-1 mb-3"></i>
                            <h5 class="card-title">Fasilitas</h5>
                            <p class="card-text">Informasi mengenai fasilitas yang kami sediakan.</p>
                            <a href="{{ url('tentang-kami/fasilitas') }}" class="btn btn-primary">Lihat</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
@endsection

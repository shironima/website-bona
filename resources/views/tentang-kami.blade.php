@extends('layout_home.app')

@section('content')
<main>
    <section class="about-us">
        <div class="container">
            <h1>Tentang Kami</h1>
            <p><strong>CERDAS, KREATIF, PEDULI, BERMODERASI, DAN BERWAWASAN GLOBAL</strong></p>
            <p>SMAK St. Bonaventura merupakan sekolah swasta Katolik yang berada di Jl. Diponegoro, Nomor 45, Kota Madiun. Lokasi yang sangat strategis dan berada di tengah kota Madiun.</p>
            <p>Sekolah kami memiliki visi “Dijiwai semangat Kristiani unggul dalam karakter, intelektual, peduli lingkungan, bermoderasi, dan berwawasan global”.</p>
        </div>
    </section>
    
    <section class="cards">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="bi bi-eye fs-3 mb-3"></i> <!-- Ikon menggunakan Bootstrap Icons -->
                            <h5 class="card-title">Visi dan Misi</h5>
                            <p class="card-text">Kenali visi dan misi sekolah kami yang menjadi landasan pendidikan.</p>
                            <a href="{{ url('tentang-kami/visi-misi') }}" class="btn btn-primary">Lihat</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="bi bi-calendar fs-3 mb-3"></i> <!-- Ikon menggunakan Bootstrap Icons -->
                            <h5 class="card-title">Sejarah Singkat</h5>
                            <p class="card-text">Pelajari sejarah singkat dari pelindung sekolah kami, Santo Bonaventura </p>
                            <a href="{{ url('tentang-kami/sejarah-singkat') }}" class="btn btn-primary">Lihat</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="bi bi-people fs-3 mb-3"></i> <!-- Ikon menggunakan Bootstrap Icons -->
                            <h5 class="card-title">Struktur Organisasi</h5>
                            <p class="card-text">Temui struktur organisasi dan tim pengajar kami.</p>
                            <a href="{{ url('/struktur-organisasi') }}" class="btn btn-primary">Lihat</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="bi bi-person fs-3 mb-3"></i> <!-- Ikon menggunakan Bootstrap Icons -->
                            <h5 class="card-title">Guru</h5>
                            <p class="card-text">Kenali para guru yang akan membimbing Anda.</p>
                            <a href="{{ url('/guru') }}" class="btn btn-primary">Lihat</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="bi bi-house fs-3 mb-3"></i> <!-- Ikon menggunakan Bootstrap Icons -->
                            <h5 class="card-title">Fasilitas</h5>
                            <p class="card-text">Informasi mengenai fasilitas yang kami sediakan.</p>
                            <a href="{{ url('/fasilitas') }}" class="btn btn-primary">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

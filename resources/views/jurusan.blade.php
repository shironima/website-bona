@extends('layout_home.app')

@section('content')
<section class="py-5">
    <div class="container">
        <!-- Bagian Judul -->
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 font-weight-bold">Jurusan yang Tersedia</h2>
            </div>
        </div>
        
        <!-- Bagian Kartu Jurusan -->
        <div class="row g-4">
            <!-- Card IPA -->
            <div class="col-md-6">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/galery/ipa.png') }}" class="card-img-top img-fluid" alt="Jurusan IPA" style="height: 250px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Jurusan IPA</h5>
                        <p class="card-text flex-grow-1">
                            Jurusan IPA (Ilmu Pengetahuan Alam) memberikan fokus kepada bidang studi seperti Fisika, Kimia, Biologi, dan Matematika. Cocok bagi siswa yang tertarik dengan sains dan teknologi.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card IPS -->
            <div class="col-md-6">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/galery/ips.png') }}" class="card-img-top img-fluid" alt="Jurusan IPS" style="height: 250px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Jurusan IPS</h5>
                        <p class="card-text flex-grow-1">
                            Jurusan IPS (Ilmu Pengetahuan Sosial) mencakup studi dalam bidang Ekonomi, Geografi, Sosiologi, dan Sejarah. Cocok bagi siswa yang ingin mendalami bidang sosial dan ekonomi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

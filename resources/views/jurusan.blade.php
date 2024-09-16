@extends('layout_home.app')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="font-weight-bold mb-5">Jurusan yang Tersedia</h2>
            </div>
        </div>
        
        <div class="row">
            <!-- Card IPA -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('images/galery/ipa.png') }}" class="card-img-top" alt="Jurusan IPA" style="max-width: 100%; height: auto;">
                    <div class="card-body">
                        <h5 class="card-title">Jurusan IPA</h5>
                        <p class="card-text">
                            Jurusan IPA (Ilmu Pengetahuan Alam) memberikan fokus kepada bidang studi seperti Fisika, Kimia, Biologi, dan Matematika. Cocok bagi siswa yang tertarik dengan sains dan teknologi.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card IPS -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('images/galery/ips.png') }}" class="card-img-top" alt="Jurusan IPS" style="max-width: 100%; height: auto;">
                    <div class="card-body">
                        <h5 class="card-title">Jurusan IPS</h5>
                        <p class="card-text">
                            Jurusan IPS (Ilmu Pengetahuan Sosial) mencakup studi dalam bidang Ekonomi, Geografi, Sosiologi, dan Sejarah. Cocok bagi siswa yang ingin mendalami bidang sosial dan ekonomi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

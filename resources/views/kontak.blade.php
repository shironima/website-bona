@extends('layout_home.app')

@section('content')
<!-- Bagian Kontak -->
<section class="py-5 bg-light">
    <div class="container">
        <!-- Judul Bagian Kontak -->
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 font-weight-bold">Kontak</h2>
                <p class="lead">Hubungi kami melalui informasi di bawah ini atau ikuti kami di media sosial.</p>
            </div>
        </div>

        <div class="row">
            <!-- Informasi Kontak -->
            <div class="col-md-6 mb-4 mb-md-0">
                <h3 class="font-weight-bold mb-4">Informasi Kontak</h3>
                <p class="mb-4">
                    Anda dapat menghubungi kami melalui informasi di bawah ini:
                </p>
                <ul class="list-unstyled mb-4">
                    <li class="mb-3">
                        <i class="bi bi-geo-alt-fill text-primary"></i>
                        <strong class="font-weight-bold"> Alamat:</strong> Jl. Diponegoro No.45, Kecamatan Manguharjo, Kota Madiun
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-envelope-fill text-primary"></i>
                        <strong class="font-weight-bold"> Email:</strong> 
                        <a href="mailto:smabovent@yahoo.co.id" class="text-decoration-none text-primary">smabovent@yahoo.co.id</a>
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-telephone-fill text-primary"></i>
                        <strong class="font-weight-bold"> Telepon:</strong> 
                        <a href="tel:(0351) 454194" class="text-decoration-none text-primary">(0351) 454194</a>
                    </li>
                </ul>

                <h3 class="font-weight-bold mb-4">Ikuti Kami di Media Sosial</h3>
                <div class="d-flex gap-4">
                    <a href="https://www.youtube.com/@smakst.bonaventuramadiun6171" target="_blank" class="text-danger">
                        <i class="bi bi-youtube" style="font-size: 2rem;"></i>
                    </a>
                    <a href="https://www.instagram.com/bonaventura_shs/" target="_blank" class="text-danger">
                        <i class="bi bi-instagram" style="font-size: 2rem;"></i>
                    </a>
                    <a href="https://www.tiktok.com/@smastbonaventura" target="_blank" class="text-dark">
                        <i class="bi bi-tiktok" style="font-size: 2rem;"></i>
                    </a>
                </div>
            </div>

            <!-- Google Maps -->
            <div class="col-md-6">
                <div class="ratio ratio-16x9 mb-4 shadow-sm rounded">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4181.118621966755!2d111.52356531080709!3d-7.623241992360526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79bef9ce12dc2f%3A0xb678c432c23e698d!2sSMA%20ST%20Bonaventura!5e1!3m2!1sid!2sid!4v1726488277795!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

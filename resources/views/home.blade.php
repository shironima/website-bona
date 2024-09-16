@extends('layout_home.app')

@section('content')
<header style="background-image: url('/images/galery/image1-banner.jpg'); 
                background-size: cover; 
                background-position: center; 
                background-repeat: no-repeat; 
                height: 80vh; 
                color: #fff; 
                display: flex; 
                align-items: center; 
                justify-content: center; 
                text-align: center;">
    <div class="container">
        <h1 class="display-4">Selamat Datang di SMAK Santo Bonaventura</h1>
        <p class="lead">Menyediakan pendidikan berkualitas dan fasilitas yang lengkap</p>
        <a href="#tentang-kami" class="btn btn-light">Pelajari Lebih Lanjut</a>
    </div>
</header>

<!-- Bagian Tentang Kami -->
<section id="tentang-kami" class="about-section py-12 my-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Kolom Kiri: Teks Tentang Kami -->
            <div class="col-md-6 mb-4 mb-md-0">
                <h2 class="text-4xl font-weight-bold mb-4">Tentang Kami</h2>
                <p class="text-lg mb-4">
                    SMAK St. Bonaventura merupakan sekolah swasta Katolik yang berada di Jl. Diponegoro, Nomor 45, Kota Madiun. Lokasi yang sangat strategis dan berada di tengah kota Madiun. Sekolah kami memiliki visi “Dijiwai semangat Kristiani unggul dalam karakter, intelektual, peduli lingkungan, bermoderasi, dan berwawasan global”.
                </p>
                <a href="{{ url('/tentang-kami') }}" class="btn btn-primary btn-lg">Selengkapnya</a>
            </div>
            <!-- Kolom Kanan: Gambar -->
            <div class="col-md-6">
                <img src="{{ asset('images/smabona1-removebg.png') }}" alt="Tentang Kami" class="img-fluid rounded shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section bg-light py-12 my-5">
    <div class="container text-center">
        <h2 class="text-3xl font-weight-bold mb-6">Kontak Kami</h2>
        <p class="text-lg mb-6">Jika Anda memiliki pertanyaan atau ingin mendapatkan informasi lebih lanjut, jangan ragu untuk menghubungi kami.</p>
        <form action="{{ url('/contact') }}" method="POST" class="mx-auto max-w-lg">
            @csrf
            <div class="mb-4">
                <input type="text" name="name" placeholder="Nama" class="form-control">
            </div>
            <div class="mb-4">
                <input type="email" name="email" placeholder="Email" class="form-control">
            </div>
            <div class="mb-4">
                <textarea name="message" placeholder="Pesan" rows="4" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-secondary btn-lg">Kirim Pesan</button>
        </form>
    </div>
</section>
@endsection

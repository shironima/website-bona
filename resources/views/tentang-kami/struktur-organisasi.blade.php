@extends('layout_home.app')

@section('content')
<!-- Bagian Struktur Organisasi -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="font-weight-bold">Struktur Organisasi</h2>
                <p class="text-muted">Berikut adalah Struktur Organisasi di SMA St. Bonaventura.</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="text-center">
                    <!-- Gambar Struktur Organisasi -->
                    <img src="{{ asset('images/galery/struktur-organisasi.png') }}" class="img-fluid rounded" alt="Struktur Organisasi SMA St. Bonaventura">
                    <p class="text-muted mt-3">Struktur Organisasi SMA St. Bonaventura</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

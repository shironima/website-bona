@extends('layout_home.app')

@section('content')
<!-- Bagian Guru -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="font-weight-bold">Daftar Guru</h2>
                <p class="text-muted">Berikut adalah daftar guru SMA St. Bonaventura.</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="text-center">
                    <!-- Gambar Guru -->
                    <img src="{{ asset('images/galery/guru-sekolah.jpg') }}" class="img-fluid rounded" alt="Foto Guru SMA St. Bonaventura">
                    <p class="text-muted mt-3">Foto bersama para guru SMA St. Bonaventura</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

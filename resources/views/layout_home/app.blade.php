<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SMAK Santo Bonaventura')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/logo-sma-bona.png') }}" alt="SMAK Santo Bonaventura" style="height: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Menu Navbar -->
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ url('/tentang-kami') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tentang Kami
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('tentang-kami/visi-misi') }}">Visi dan Misi</a></li>
                            <li><a class="dropdown-item" href="{{ url('tentang-kami/sejarah-singkat') }}">Sejarah Singkat</a></li>
                            <li><a class="dropdown-item" href="{{ url('tentang-kami/struktur-organisasi') }}">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="{{ url('tentang-kami/guru') }}">Guru</a></li>
                            <li><a class="dropdown-item" href="{{ url('tentang-kami/fasilitas') }}">Fasilitas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/jurusan') }}">Jurusan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/kontak') }}">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/berita') }}">Berita</a>
                    </li>
                </ul>
                <!-- Button PPDB -->
                <a class="btn btn-primary ms-3" href="#" role="button">PPDB</a>
            </div>
        </div>
    </nav>

    <main role="main" class="container mt-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <!-- Section: Media Sosial -->
                <div class="col-md-4 mb-3 mb-md-0">
                    <h5 class="mb-3">Media Sosial</h5>
                    <a href="https://www.instagram.com/bonaventura_shs/" target="_blank" class="text-light me-3 no-underline">
                        <i class="bi bi-instagram"></i> Instagram
                    </a>
                    <a href="https://www.youtube.com/@smakst.bonaventuramadiun6171" target="_blank" class="text-light me-3 no-underline">
                        <i class="bi bi-youtube"></i> YouTube
                    </a>
                    <a href="https://www.tiktok.com/@smastbonaventura" target="_blank" class="text-light no-underline">
                        <i class="bi bi-tiktok"></i> TikTok
                    </a>
                </div>

                <!-- Section: Hubungi Kami -->
                <div class="col-md-4">
                    <h5 class="mb-3">Hubungi Kami</h5>
                    <p>
                        <a href="https://wa.me/#" target="_blank" class="text-light no-underline">
                            <i class="bi bi-whatsapp"></i> WhatsApp
                        </a>
                    </p>
                    <p>
                        <a href="mailto:BoventSHS@gmail.com" class="text-light no-underline">
                            <i class="bi bi-envelope"></i> BoventSHS@gmail.com
                        </a>
                    </p>
                    <p>
                        <a href="tel:(0351) 454194" class="text-light no-underline">
                            <i class="bi bi-telephone"></i> Telepon: (0351) 454194
                        </a>
                    </p>
                </div>

                <!-- Section: Logo Sekolah -->
                <div class="col-md-4 text-end">
                    <img src="{{ asset('images/logo-sma-bona.png') }}" alt="Logo SMAK Santo Bonaventura" style="height: 200px;">
                </div>
            </div>

            <!-- Copyright -->
            <div class="row mt-4">
                <div class="col text-center">
                    <p class="mb-0">&copy; 2024 SMAK Santo Bonaventura Madiun. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Custom CSS to remove underline on links -->
    <style>
        .no-underline {
            text-decoration: none;
        }
        .no-underline:hover {
            text-decoration: underline; /* Optional: underline on hover */
        }
    </style>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

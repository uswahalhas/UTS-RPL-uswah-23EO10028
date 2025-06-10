<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uswah Bookia</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #f8f9fa;
        }

        /* Header */
        .navbar-custom {
            background-color: #1e1e1e;
            padding: 5px 20px;
        }

        .navbar-custom .navbar-brand img {
            height: 60px;
            width: auto;
        }

        .navbar-custom .nav-link {
            color: #fff !important;
            margin-left: 20px;
            font-weight: 500;
        }

        .logo-header {
            position: absolute;
            top: 30px;
            left: 30px;
            z-index: 100;
        }

        .logo-header img {
            height: 300px;
        }

        /* Hero Section */
        .hero {
            background: #ffffff;
            height: 100vh;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 30px;
        }

        .hero-text {
            max-width: 50%;
            text-align: left;
        }

        .hero-text h1 {
            font-size: 40px;
            color: #333;
            margin-bottom: 20px;
        }

        .hero-text p {
            font-size: 18px;
            color: #666;
        }

        /* Welcome Box */
        .welcome-box {
            background: linear-gradient(145deg, #c9a341, #b88e2f);
            border-radius: 12px;
            padding: 30px 20px;
            max-width: 400px;
            width: 90%;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
        }

        .welcome-box h1 {
            margin: 0 0 10px;
            font-size: 28px;
            color: #333;
        }

        .welcome-box p {
            margin-bottom: 20px;
            font-size: 16px;
            color: #666;
        }

        .button-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .button-group a {
            text-decoration: none;
            padding: 12px;
            border-radius: 8px;
            font-weight: bold;
            color: white;
            background-color: #c9a341;
            transition: background 0.3s;
        }

        .button-group a:hover {
            background-color: #b88e2f;
        }

        /* Lapangan Section */
        .lapangan-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .lapangan-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
        }

        .lapangan-section {
            padding: 40px 20px;
            background-color: #fff;
        }

        footer {
            background-color: #fff;
            border-top: 1px solid #ddd;
            color: #333;
        }

        footer a {
            color: #333;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .whatsapp-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }

        .whatsapp-button img {
            width: 50px;
            height: 50px;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-custom">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo-uswah.png') }}" alt="Uswah Bookia">
            </a>
            <div class="ms-auto">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Artikel</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Kontak Kami</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <div class="hero">
        <!-- Teks Hero di Kiri -->
        <div class="hero-text">
            <h1>Selamat Datang </h1>
            <p>Pilih Olahraga Favoritmu & Pesan Lapangannya Sekarang!</p>
            <p><strong>Gabung Sekarang dan Nikmati Kemudahannya</strong></p>
        </div>

        <!-- Box Buat Akun di Kanan -->
        <div class="welcome-box">
            <h1>Uswah Bookia</h1>
            <p>Sistem Pemesanan Fasilitas Olahraga</p>

            <div class="button-group">
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Buat Akun</a>
            </div>
        </div>
    </div>

    <!-- Bagian Lapangan -->
    <div class="container lapangan-section">
        <h3 class="text-center mb-4">Pilihan Lapangan yang Tersedia</h3>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            @foreach ($lapangan as $item)
            <div class="col">
                <div class="lapangan-card">
                    <img src="{{ asset('images/lapangan/' . $item->gambar) }}" alt="{{ $item->nama }}">
                    <div class="p-3 text-center">
                        <h5 class="mb-2">{{ $item->nama }}</h5>
                        <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm">Booking</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Footer -->
    <footer class="pt-5 pb-4">
        <div class="container text-center text-md-start">
            <div class="row justify-content-center">
                <div class="col-md-3 mb-4">
                    <h5 class="fw-bold">COMPANY</h5>
                    <img src="{{ asset('images/logo-uswah.png') }}" alt="Logo" class="mb-2" style="height: 30px;">
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>

                <div class="col-md-3 mb-4">
                    <h5 class="fw-bold">PRODUCTS</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Venue</a></li>
                        <li><a href="#">Activity</a></li>
                        <li><a href="#">Community</a></li>
                        <li><a href="#">Uswah Business</a></li>
                    </ul>
                </div>

                <div class="col-md-3 mb-4">
                    <h5 class="fw-bold">SUPPORT</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">API Reference</a></li>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Live Chat</a></li>
                    </ul>
                </div>
            </div>

            <hr>

            <div class="row justify-content-center text-center">
                <div class="col-md-8 text-muted small">
                    <p class="mb-1">
                        PT USWAH BOOKIA INDONESIA - Kampus Universitas Nahdlatul Ulama Al Ghazali Cilacap<br>
                        Jl. Kemerdekaan Barat No 17 RT.01 Rw.05 Kesugihan Kidul, Kesugihan Kab.Cilacap Jawa Tengah
                    </p>
                    <p class="mb-0 mt-2">
                        <a href="#" class="me-2">Privacy Policy</a> |
                        <a href="#" class="me-2">Legal</a> |
                        <a href="mailto:support@uswahbookia.id" class="me-2">support@uswahbookia.id</a> |
                        <span>+62 8820 0328 1817</span>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Tombol WhatsApp -->
    <div class="whatsapp-button">
        <a href="https://wa.me/62882003281817" target="_blank">
            <img src="{{ asset('images/whatsapp-icon.png') }}" alt="WhatsApp">
        </a>
    </div>

</body>

</html>

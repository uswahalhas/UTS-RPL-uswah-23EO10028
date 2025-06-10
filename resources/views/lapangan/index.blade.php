<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Lapangan</title>
    <!-- Link ke CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav>
        <!-- Navigasi atau header bisa diletakkan di sini -->
    </nav>

    <div class="container">
        @yield('content') <!-- Bagian ini akan digantikan dengan konten yang ada di setiap view -->
    </div>

    <!-- Link ke JS -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Uswah Bookia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .btn-primary {
      background-color: #c79c3c;
      border-color: #c79c3c;
    }

    .btn-primary:hover {
      background-color: #b6892e;
      border-color: #b6892e;
    }

    a {
      color: #c79c3c;
      text-decoration: none;
    }

    a:hover {
      color: #b6892e;
      text-decoration: underline;
    }
  </style>
</head>
<body class="bg-light">

<!-- Navigasi atas -->
<nav class="d-flex justify-content-between align-items-center px-4 py-3 bg-white shadow-sm">
  <a href="{{ url('/') }}" class="btn btn-outline-secondary">← Halaman Utama</a>
  <div>
    @if (Route::currentRouteName() !== 'login')
      <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Login</a>
    @endif
    @if (Route::currentRouteName() !== 'register')
      <a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a>
    @endif
  </div>
</nav>

<div class="container d-flex justify-content-center align-items-center" style="height: 90vh;">
  <div class="row shadow" style="width: 800px; border-radius: 10px; background-color: white; overflow: hidden;">
    
    <!-- Gambar Olahraga -->
    <div class="col-md-6 p-0">
      <img src="{{ asset('images/voli.png') }}" alt="Olahraga" class="img-fluid h-100" style="object-fit: cover;">
    </div>
    
    <!-- Form Login -->
    <div class="col-md-6 p-4">
      <!-- Judul Sistem -->
      <div class="text-center mb-4">
        <h4 class="fw-bold">Uswah Bookia</h4>
      </div>

      <h3 class="text-center mb-3">Login</h3>

      <!-- Menampilkan pesan error -->
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul class="mb-0">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required autofocus>
        </div>

        <div class="mb-3 position-relative">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" required>
          <span onclick="togglePassword('password', this)" style="position:absolute; right: 10px; top: 38px; cursor:pointer;">
            👁️
          </span>
        </div>

        <div class="d-grid">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
      </form>

      <div class="text-center mt-3">
        Belum punya akun? <a href="{{ route('register') }}">Register</a>
      </div>
    </div>

  </div>
</div>

<script>
  function togglePassword(id, el) {
    const input = document.getElementById(id);
    const type = input.type === 'password' ? 'text' : 'password';
    input.type = type;
    el.textContent = type === 'password' ? '👁️' : '🙈';
  }
</script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - Uswah Bookia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .auth-container {
      max-width: 750px;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }
    .auth-image {
      background-image: url('{{ asset('images/voli.png') }}');
      background-size: cover;
      background-position: center;
      min-height: 100%;
    }
  </style>
</head>
<body class="bg-light">

<div class="container py-5">
  <div class="auth-container d-flex mx-auto bg-white">
    
    <!-- Bagian Gambar -->
    <div class="d-none d-md-block col-md-5 auth-image"></div>

    <!-- Bagian Form -->
    <div class="col-12 col-md-7 p-4">
      <div class="text-center mb-3">
        <h4><strong>Uswah Bookia</strong></h4>
        <p class="text-muted mb-1">Sistem Pemesanan Fasilitas Olahraga</p>
        <h5 class="fw-bold">Register</h5>
      </div>

      {{-- Tampilkan error validasi --}}
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul class="mb-0">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      {{-- Tampilkan pesan sukses jika ada --}}
      @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif

      <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-2">
          <label for="name">Name</label>
          <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
        </div>

        <div class="mb-2">
          <label for="email">Email address</label>
          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="mb-2 position-relative">
          <label for="password">Password</label>
          <input id="password" type="password" class="form-control" name="password" required>
          <span onclick="togglePassword('password', this)" style="position:absolute; right: 10px; top: 38px; cursor:pointer;">👁️</span>
        </div>

        <div class="mb-3 position-relative">
          <label for="password_confirmation">Confirm Password</label>
          <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
          <span onclick="togglePassword('password_confirmation', this)" style="position:absolute; right: 10px; top: 38px; cursor:pointer;">👁️</span>
        </div>

        <button type="submit" class="btn btn-primary w-100">Register</button>
      </form>

      <div class="text-center mt-3">
        Sudah punya akun? <a href="{{ route('login') }}">Login</a>
      </div>
    </div>

  </div>
</div>

<script>
  function togglePassword(id, el) {
    const input = document.getElementById(id);
    input.type = input.type === 'password' ? 'text' : 'password';
    el.textContent = input.type === 'password' ? '👁️' : '🙈';
  }
</script>

</body>
</html>

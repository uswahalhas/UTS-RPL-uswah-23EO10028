<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Booking</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    /* Header Styles */
    .header {
      background-color: #c79c3c;
      color: white;
      padding: 15px 0;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .header-container {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 20px;
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
      text-decoration: none;
      color: white;
    }

    .nav {
      display: flex;
      gap: 20px;
    }

    .nav a {
      color: white;
      text-decoration: none;
      padding: 5px 10px;
      border-radius: 4px;
      transition: background-color 0.3s;
    }

    .nav a:hover {
      background-color: rgba(255,255,255,0.2);
    }

    /* Existing Styles */
    .main-content {
      padding: 40px;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    .container {
      max-width: 900px;
      margin: 0 auto;
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .btn {
      background-color: #c79c3c;
      color: white;
      padding: 10px 18px;
      border: none;
      border-radius: 6px;
      text-decoration: none;
      font-weight: bold;
      display: inline-block;
      margin-bottom: 20px;
    }

    .btn:hover {
      background-color: #b38a35;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    th, td {
      padding: 12px;
      border: 1px solid #ddd;
      text-align: left;
    }

    th {
      background-color: #f8f8f8;
    }

    .success {
      background-color: #d4edda;
      color: #155724;
      padding: 10px 15px;
      margin-bottom: 20px;
      border-left: 4px solid #28a745;
      border-radius: 6px;
    }

    .action-form {
      display: inline;
    }

    .delete-btn {
      background-color: #dc3545;
      color: white;
      padding: 5px 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .delete-btn:hover {
      background-color: #c82333;
    }

    .edit-link {
      color: #007bff;
      text-decoration: none;
    }

    .edit-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <!-- Header Section -->
  <header class="header">
    <div class="header-container">
      <a href="#" class="logo">Uswah Bookia</a>
      <nav class="nav">
        <a href="beranda.html">Beranda</a>
        <a href="login.html">Login</a>
        <a href="register.html">Register</a>
      </nav>
    </div>
  </header>

  <!-- Main Content -->
  <div class="main-content">
    <div class="container">
      <h1>Booking</h1>

      {{-- Tombol Tambah Booking --}}
      <a href="{{ route('booking.create') }}" class="btn">+ Create Booking</a>

      {{-- Pesan sukses --}}
      @if (session()->has('success'))
        <div class="success">
          {{ session('success') }}
        </div>
      @endif

      {{-- Tabel Data Booking --}}
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Equipment</th>
            <th>Booking Date</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($booking as $item)
            <tr>
              <td>{{ $item->id }}</td>
              <td>{{ $item->phone_number }}</td>
              <td>{{ $item->email }}</td>
              <td>{{ $item->equipment }}</td>
              <td>{{ $item->booking_date }}</td>
              <td>
                <a href="{{ route('booking.edit', $item->id) }}" class="edit-link">Edit</a>
              </td>
              <td>
                <form method="POST" action="{{ route('booking.destroy', $item->id) }}" class="action-form">
                  @csrf
                  @method('DELETE')
                  <input type="submit" value="Delete" class="delete-btn" onclick="return confirm('Yakin ingin menghapus?')" />
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
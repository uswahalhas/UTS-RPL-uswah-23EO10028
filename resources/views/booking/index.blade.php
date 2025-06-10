<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
</head>
<body>
    <h1>Booking</h1>

    {{-- Tombol Tambah Booking --}}
    <div style="margin-bottom: 10px;">
        <a href="{{ route('booking.create') }}">
            <button>Create Booking</button>
        </a>
    </div>

    {{-- Pesan sukses --}}
    @if (session()->has('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    {{-- Tabel Data Booking --}}
    <table border="1" cellpadding="8" cellspacing="0">
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
                    <a href="{{ route('booking.edit', $item->id) }}">Edit</a>
                </td>
                <td>
                    <form method="POST" action="{{ route('booking.destroy', $item->id) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" onclick="return confirm('Yakin ingin menghapus?')">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Create Booking</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f6f9;
      margin: 0;
      padding: 30px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    h1 {
      color: #333;
      margin-bottom: 20px;
    }

    form {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 500px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
      color: #333;
    }

    input[type="text"],
    input[type="email"],
    input[type="date"] {
      width: 100%;
      padding: 12px 14px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 15px;
    }

    input[type="submit"] {
      background-color: #c79c3c;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-weight: bold;
      font-size: 15px;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #c79c3c;
    }

    ul {
      background-color: #ffe6e6;
      padding: 10px 20px;
      border-left: 4px solid #f44336;
      color: #a94442;
      margin-bottom: 20px;
      list-style-type: none;
      border-radius: 6px;
    }
  </style>
</head>
<body>
  <h1>Create a Booking</h1>

  @if($errors->any())
  <ul>
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
  @endif

  <form method="POST" action="{{ route('booking.store') }}">
    @csrf
    @method('POST')

    <div>
      <label>Phone Number</label>
      <input type="text" name="phone_number" placeholder="Phone Number" required />
    </div>

    <div>
      <label>Email</label>
      <input type="email" name="email" placeholder="Email" required />
    </div>

    <div>
      <label>Equipment</label>
      <input type="text" name="equipment" placeholder="Equipment" required />
    </div>

    <div>
      <label>Booking Date</label>
      <input type="date" name="booking_date" required />
    </div>

    <div>
      <input type="submit" value="Save a New Booking" />
    </div>
  </form>
</body>
</html>

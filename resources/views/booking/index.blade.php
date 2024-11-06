<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Booking</h1>
<div>
    @if (session()->has('success'))
        <div>
        {{session('success')}}
</div>
    @endif
</div>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Phone_Number</th>
            <th>Email</th>
            <th>Equipment</th>
            <th>Booking_Date</th>
            <th>Edit</th>
            <th>Delete</th>
        <tr>
        @foreach ($booking as $booking)
        <tr>
           <td>{{$booking->id}}</td>
           <td>{{$booking->phone_number}}</td>
           <td>{{$booking->email}}</td>
           <td>{{$booking->equipment}}</td>
           <td>{{$booking->booking_date}}</td>
           <td>
                <a href="{{route('booking.edit', ['booking' => $booking])}}">Edit</a>
</td>
            <td>
                <form method="post" action="{{route('booking.destroy',['booking'=>$booking])}}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" />
                </form>
            </td>
        <tr>
        @endforeach
        <td>
    
</td>
<table>
<div>
</body>
</html>
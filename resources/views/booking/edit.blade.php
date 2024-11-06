<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div>
        </div>
    <form method="post" action="{{route('booking.update', ['booking'=> $booking])}}">
    @csrf
    @method('put')
    <div>
        <label>Phone_Number</label>
        <input type="string" name="phone_number" placeholder="Phone_Number" value="{{$booking->phone_number}}"/>
    </div>
    <div>
        <label>Qty</label>
        <input type="string" name="email" placeholder="Email" value="{{$booking->email}}"/>
    </div>
    <div>
        <label>Equipment</label>
        <input type="string" name="equipment" placeholder="Equipment" value="{{$booking->equipment}}"/>
    </div>
    <div>
        <label>Booking_Date</label>
        <input type="date" name="booking_date" placeholder="Booking_Date" value="{{$booking->booking_date}}"/>
    </div>
    <div>
        <input type="submit" value="Update" />
</div>
    </body>
    </html>
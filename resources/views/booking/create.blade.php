<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<h1>Create a Booking</h1>
<div>
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
        
        @endif
<div>
<form method="post" action="{{route('booking.store')}}">
@csrf
@method('post')
<div>  
<label>Phone_Number</label>
<input type="string" name="phone_number" placeholder="Phone_Number" />
</div>
<div>
<label>Email</label>
<input type="string" name="email" placeholder="Email" />
</div>
<div>
<label>Equipment</label>
<input type="string" name="equipment" placeholder="Equipment" />
</div>
<div>
<label>Booking_Date</label>
<input type="date" name="booking_date" placeholder="Booking_Date" />
</div>
<div>
<input type="submit" value="Save a New Booking" />
</form>

</div>
</body>
</html>
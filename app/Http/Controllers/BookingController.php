<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index(){
        $booking = Booking::all();
        return view('booking.index', ['booking' => $booking]);
    }
        public function create(){
            return view('booking.create');
            }
            public function store(Request $request){
                $data = $request->validate([
                'phone_number' => 'required|regex:/^(\+?\d{1,3}[- ]?)?\d{10}$/',
                'email' => 'required|email',
                'equipment' => 'required|string',
                'booking_date' => 'required|date'
                ]);
            
                Booking::create($data);
            
                return redirect(route('booking.index'));
            }
            
            public function edit(Booking $booking){
                return view('booking.edit', ['booking' => $booking]);
            }
            public function update(Booking $booking, Request $request){
                $data = $request->validate([
                'phone_number' => 'required|regex:/^(\+?\d{1,3}[- ]?)?\d{10}$/',
                'email' => 'required|email',
                'equipment' => 'required|string',
                'booking_date' => 'required|date'
                ]);
            $booking->update($data);
                return redirect(route('booking.index'))->with('success', 'Booking Update Successfully');
            }  
            public function destroy(Booking $booking){
                $booking->delete();
                return redirect(route('booking.index'))->with('success', 'Booking Deleted Succesfully');
            }
}   
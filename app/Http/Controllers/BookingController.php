<?php

namespace App\Http\Controllers;

use App\Models\Booking;

class BookingController
{
    public function requests(){
        $bookings = Booking::pending()->get();
        return view('request',compact('bookings'));
    }
    public function services(){
        $bookings = Booking::active()->get();
        return view('service',compact('bookings'));
    }
    public function payments(){
        $bookings = Booking::payment()->get();
        return view('payment',compact('bookings'));
    }
    public function changeStatus(){
        Booking::find(decrypt(request('book_id')))->update([
            'status'    => decrypt(request('status'))
        ]); 
        return ['status'=>200];
    }
}

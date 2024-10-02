<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Mail\BookingConfirmation;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'event_type' => 'required',
            'event_date' => 'required|date',
            'location' => 'required',
            'menu_package_id' => 'required',
            'music_package_id' => 'required',
            'decoration_package_id' => 'required',
        ]);

        Booking::create($request->all());

        // Prepare data for the email
        $bookingData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'event_type' => $request->input('event_type'),
            'event_date' => $request->input('event_date'),
            'location' => $request->input('location'),
            'menu_package_id' => $request->input('menu_package_id'),
            'music_package_id' => $request->input('music_package_id'),
            'decoration_package_id' => $request->input('decoration_package_id'),
        ];

        // Send email to admin
    Mail::to('dewmiw@gmail.com')->send(new BookingConfirmation($bookingData));

    // Optionally send a confirmation email to the user
    Mail::to($request->input('email'))->send(new BookingConfirmation($bookingData));

        return redirect()->route('book-now')->with('success', 'Booking successfully submitted.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

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
            'guests' => 'required|integer',
            'menu_package_id' => 'required',
            'music_package_id' => 'required',
            'decoration_package_id' => 'required',
        ]);

        Booking::create($request->all());

        return redirect()->route('book-now')->with('success', 'Booking successfully submitted.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function create(Restaurant $restaurant)
    {
        return view('reservations.create', compact('restaurant'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'reservation_date' => ['required', 'date'],
            'reservation_time' => ['required'],
            'number_of_people' => ['required', 'integer', 'min:1'],
        ]);

        $reservation = new Reservation();

        $reservation->user_id = auth()->id();
        $reservation->restaurant_id = $request->restaurant_id;
        $reservation->reservation_date = $request->reservation_date;
        $reservation->reservation_time = $request->reservation_time;
        $reservation->number_of_people = $request->number_of_people;

        $reservation->save();

        return redirect('/restaurants/' . $reservation->restaurant_id);
    }
}

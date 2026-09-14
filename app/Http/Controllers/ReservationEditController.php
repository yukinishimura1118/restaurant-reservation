<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationEditController extends Controller
{
    public function edit(Reservation $reservation)
    {
        return view('reservations.edit', compact('reservation'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        $request->validate([
            'reservation_date' => ['required', 'date'],
            'reservation_time' => ['required'],
            'number_of_people' => ['required', 'integer', 'min:1'],
        ]);

        $reservation->reservation_date = $request->reservation_date;
        $reservation->reservation_time = $request->reservation_time;
        $reservation->number_of_people = $request->number_of_people;

        $reservation->save();

        return redirect('/mypage');
    }
}

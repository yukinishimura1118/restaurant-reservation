<?php

namespace App\Http\Controllers;

use App\Models\Reservation;

class ReservationCancelController extends Controller
{
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return redirect('/mypage');
    }
}

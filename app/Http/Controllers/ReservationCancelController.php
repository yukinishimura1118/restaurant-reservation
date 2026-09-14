<?php

namespace App\Http\Controllers;

use App\Models\Reservation;

class ReservationCancelController extends Controller
{
    public function destroy(Reservation $reservation)
    {
        if ($reservation->user_id !== auth()->id()) {
            abort(403);
        }
        $reservation->delete();

        return redirect('/mypage');
    }
}

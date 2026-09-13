<?php

namespace App\Http\Controllers;

use App\Models\Reservation;

class MypageController extends Controller
{
    public function index()
    {
        $reservations = Reservation::where('user_id', auth()->id())
            ->with('restaurant')
            ->get();

        return view('mypage.index', compact('reservations'));
    }
}

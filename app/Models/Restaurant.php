<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;

class Restaurant extends Model
{
    protected $fillable = [
        'name',
        'address',
        'genre',
        'description',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}

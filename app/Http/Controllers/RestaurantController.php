<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();

        return view('restaurants.index', compact('restaurants'));
    }
    public function create()
    {
    return view('restaurants.create');
    }
    public function store(Request $request)
    {
    $restaurant = new Restaurant();

    $restaurant->name = $request->name;
    $restaurant->address = $request->address;
    $restaurant->genre = $request->genre;
    $restaurant->description = $request->description;

    $restaurant->save();

    return redirect('/restaurants');
    }
    public function show(Restaurant $restaurant)
    {
    return view('restaurants.show', compact('restaurant'));
    }
}

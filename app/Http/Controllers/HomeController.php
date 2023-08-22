<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Flight;
use App\Models\Seats;
use App\Models\Places;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // all flights after the current date
        $flights = Flight::where('date', '>=', date('Y-m-d'))->get();
        return view('home', compact('flights'));
    }
    public function travel()
    {
        $history = Seats::where('user_id', auth()->user()->id)->pluck('flight_id');
        $flights = Flight::wherein('id',$history)->pluck('to');
        $places= Places::wherein('nearest_to',$flights)->get();

        return view('travel', compact('places'));
    }
    //function to redirect to history
    public function history()
    {

//get all flights booked before current date
        $flight_before = Flight::join('seats', 'flights.id', '=', 'seats.flight_id')->where('seats.user_id', auth()->user()->id)->where('flights.date', '<', date('Y-m-d'))->get();
//get all flights booked after current date
        $flight_after = Flight::join('seats', 'flights.id', '=', 'seats.flight_id')->where('seats.user_id', auth()->user()->id)->where('flights.date', '>', date('Y-m-d'))->get();
        return view('history', compact('flight_before', 'flight_after'));

    }

    public function placetovisit()
    {
        return view('placetovisit');
    }
    public function package()
    {
        return view('package');
    }
}

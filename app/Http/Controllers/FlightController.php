<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Seats;
use App\Models\Rating;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class FlightController extends Controller
{
//book a seat
    public function book(Request $request, $flight)
    {
        
        $flight = Flight::find($flight);
        foreach($request->seat as $s){
        $seat = $flight->seats()->where('seat_number', $s)->first();
        if($seat->status == null){
            $seat->user_id = auth()->user()->id; 
            $seat->status = 1;
            $seat->save();
            $message = 'Seat booked successfully';
        }
        else{
            $message = 'Seat already booked';
        }
        }
        return redirect()->back()->with('message', $message);
    }
    public function show(Flight $flight)
    {
        //view flight_show page with flight data

        $seat = Seats::where('flight_id',$flight->id)->get();
        return view('flight_show', compact('flight','seat'));
    }
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
{
    $flights = Flight::where('from', 'like', $request->from)
        ->where('to', 'like', $request->to)
        ->where('date', '>=', date('Y-m-d'))
        ->get();
    
    $flightsWithAvgRating = [];

    foreach ($flights as $flight) {
        $flightId = $flight->id;
        
        $ratings = Rating::where('flight_id', $flightId)->get();
        
        $totalRatings = count($ratings);
        $sumRatings = $ratings->sum('rating'); // Assuming 'rating' is the column for ratings
        
        $averageRating = ($totalRatings > 0) ? ($sumRatings / $totalRatings) : 0;
        
        // Add flight ID and average rating to the result array
        $flightsWithAvgRating[] = [
            'flight_id' => $flightId,
            'average_rating' => $averageRating,
        ];
    }
    
    // Sort flights with average ratings in descending order
    usort($flightsWithAvgRating, function ($a, $b) {
        return $b['average_rating'] - $a['average_rating'];
    });

    // Create an associative array to map flight IDs to their respective flights
    $flightMap = [];
    foreach ($flights as $flight) {
        $flightMap[$flight->id] = $flight;
    }

    // Reorder the flights based on the sorted flight IDs from $flightsWithAvgRating
    $sortedFlights = [];
    foreach ($flightsWithAvgRating as $flightWithRating) {
        $flightId = $flightWithRating['flight_id'];
        $sortedFlights[] = $flightMap[$flightId];
    }

    // Now $sortedFlights contains flights sorted by average rating in descending order
    
    return view('search', compact('sortedFlights', 'flightsWithAvgRating'));
}

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // store flight data
        $flight = new Flight;   
        $flight->total_seats = $request->total_seats;
        $flight->time = $request->time;
        $flight->date = $request->date;
        $flight->flight_name = $request->flight_name;
        $flight->from = $request->from;
        $flight->to = $request->to;
        $flight->price = $request->price;
        $flight->save();


        //redirect to the flights page
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function edit(Flight $flight)
    {
//redirect to edit page
        return view('admin.flight_edit', compact('flight'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flight $flight)
    {
        //update flight data
        $flight->total_seats = $request->total_seats;
        $flight->time = $request->time;
        $flight->date = $request->date;
        $flight->flight_name = $request->flight_name;
        $flight->from = $request->from;
        $flight->to = $request->to;
        $flight->price = $request->price;
        $flight->save();
//delete all seats
        $flight->seats()->delete();

        for ($i=0; $i < $flight->total_seats; $i++) 
            { 
                $seat = new Seats;
                $seat->flight_id = $flight->id;
                $num = $flight->flight_name .'-'.($i+1);
                $seat->seat_number = $num;

                $seat->save();
            }
        //redirect to the flights page
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flight $flight)
    {
        //delete flight
        $flight->delete();
        //redirect to the flights page
        return redirect('/admin/flights');
    }
    public function invoice(Flight $flight){
    $seats = Seats::where('flight_id', $flight->id)->where('user_id',auth()->user()->id)->get();
    return view('invoice',compact('seats','flight'));

    }
}

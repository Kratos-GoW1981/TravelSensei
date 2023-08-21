<?php

namespace App\Http\Controllers;
use App\Models\Flight;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function show($id){
        $flightId = $id;
        $flightDetails = Flight::where('id',$flightId)->get();

        return view('rate', compact('flightDetails'));

    }
    public function save(Request $request){
        if(Auth::check()){
        $userId = Auth::user()->id;
        $flightId = $request->flightId;
        $userRating = $request->rating;
        $rating = new Rating();
        $rating->user_id = $userId;
        $rating->flight_id = $flightId;
        $rating->rating = $userRating;
        $rating->save();

        return redirect('/home');

        }
        
    

    }
}

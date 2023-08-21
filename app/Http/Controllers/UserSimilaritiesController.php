<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Seats;
use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserSimilaritiesController extends Controller
{

    public function calculateUserSimilarities()
    {
        $users = User::all();
        foreach ($users as $user) {
            foreach ($users as $otherUser) {
                if ($user->id !== $otherUser->id) {
                    $similarity = $this->calculateSimilarity($user, $otherUser);
                    DB::table('user_similarities')->updateOrInsert(
                        ['user_id' => $user->id, 'similar_user_id' => $otherUser->id],
                        ['similarities' => $similarity]
                    );
                }
            }
        }
        $user_id = Auth::user()->id;
        $recommendedFlightsData =  $this->generateRecommendations($user_id);

        return view('calculate-similarities', ['recommendedFlights' => $recommendedFlightsData]);

    }

    private function calculateSimilarity($userA, $userB)
    {
        $bookedFlightsA = $userA->bookedFlights()->pluck('flight_id')->toArray();
        $bookedFlightsB = $userB->bookedFlights()->pluck('flight_id')->toArray();
    
        $allFlights = array_unique(array_merge($bookedFlightsA, $bookedFlightsB));
        $intersectionCount = count(array_intersect($bookedFlightsA, $bookedFlightsB));
    
        if (count($allFlights) === 0) {
            return 0; // Return 0 similarity if there are no flights
        }
    
        $similarity = $intersectionCount / count($allFlights);
    
        return $similarity;
    }
    

    public function generateRecommendations($userId)
    {
        $user = User::find($userId);
        $userSimilarities = DB::table('user_similarities')
            ->where('user_id', $user->id)
            ->pluck('similarities', 'similar_user_id');

        $recommendedFlights = [];
        foreach ($userSimilarities as $similarUserId => $similarity) {
            $similarUser = User::find($similarUserId);
            if ($similarUser) {
                $similarUserFlights = $similarUser->bookedFlights()->pluck('seats.flight_id')->toArray();
                $unseenFlights = array_diff($similarUserFlights, $user->bookedFlights()->pluck('seats.flight_id')->toArray());
                $recommendedFlights = array_merge($recommendedFlights, $unseenFlights);
            }
        }

        $topN = 10;
        $recommendedFlights = array_slice(array_unique($recommendedFlights), 0, $topN);

        // Assuming you have a Flight model to fetch flight details
        $recommendedFlightsData = Flight::whereIn('id', $recommendedFlights)->get();
        return $recommendedFlightsData;
        // return view('calculate-similarities', ['recommendedFlights' => $recommendedFlightsData]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Seats;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Models\Flight;


class TSPController extends Controller
{
    public function nearestNeighborTSP(Request $request, $flightId)
    {
        $flight = Flight::find($flightId);
        $seats = $flight->seats()->whereIn('seat_number', $request->seat)->get();

        // Extract coordinates from booked seats
        $coordinates = $seats->map(function ($seat) {
            return [$seat->x_coordinate, $seat->y_coordinate]; // Replace with actual coordinates
        })->toArray();

        // Implement the TSP algorithm here (e.g., nearest neighbor)
        $route = $this->nearestNeighborAlgorithm($coordinates);

        // Calculate total distance of the TSP route
        // $totalDistance = $this->calculateTotalDistance($route);

        // Pass the route and total distance to the view
        return view('tsp.result', [
            'route' => $route,
            // 'totalDistance' => $totalDistance,
            'flight' => $flight,
        ]);
    }

    // Other methods in your controller...

    private function nearestNeighborAlgorithm(array $coordinates)
    {
        // Implement your TSP algorithm (nearest neighbor) using the coordinates
        // Return the ordered list of visited coordinates (route)
    }

    private function calculateTotalDistance(array $route)
    {
        // Implement your logic to calculate the total distance of the route
        // This could involve summing up distances between consecutive coordinates
    }
}

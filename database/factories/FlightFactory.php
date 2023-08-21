<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Flight;

class FlightFactory extends Factory
{
    protected $model = Flight::class;

    public function definition()
    {
        return [
            'flight_name' => 'Shree Airlines',
            'total_seats' => $this->faker->numberBetween(100, 300),
            'time' => $this->faker->time('H:i'),
            'date' => $this->faker->date(),
            'from' => 'kathmandu',
            'to' => 'pokhara',
            'price' => $this->faker->randomFloat(2, 100, 1000),
            // Other flight attributes
        ];
    }
}

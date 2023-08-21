<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Seats;

class SeatsFactory extends Factory
{
    protected $model = Seats::class;

    public function definition()
    {
        return [
            'seat_number' => $this->faker->unique()->randomNumber(3),
            'flight_id' => \App\Models\Flight::factory(),
            'user_id' => \App\Models\User::factory(),
            'status' => 0,
        ];
    }
}


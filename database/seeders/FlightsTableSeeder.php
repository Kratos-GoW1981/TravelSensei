<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Flight;

class FlightsTableSeeder extends Seeder
{
    public function run()
    {
        Flight::factory(20)->create();
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Seats;

class SeatsTableSeeder extends Seeder
{
    public function run()
    {
        Seats::factory(50)->create();
    }
}


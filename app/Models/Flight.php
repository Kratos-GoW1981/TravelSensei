<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Seats;
class Flight extends Model
{
    use HasFactory;

    public function seats()
    {
        return $this->hasMany(Seats::class);
    }

    public function bookedSeats()
    {
        return $this->hasMany(Seats::class, 'flight_id');
    }
    protected static function boot()
    {

        parent::boot();
        static::created(function ($flight) 
        {
            for ($i=0; $i < $flight->total_seats; $i++) 
            { 
                $seat = new Seats;
                $seat->flight_id = $flight->id;
                $num = $flight->flight_name .'-'.($i+1);
                $seat->seat_number = $num;

                $seat->save();
            }
        });
    }
}

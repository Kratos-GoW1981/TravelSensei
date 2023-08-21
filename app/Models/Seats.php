<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seats extends Model
{
    use HasFactory;
// belongs to flight
    // public function flight()
    // {
    //     return $this->belongsTo(Flight::class);
    // }
//belongs to user
    public function user()
    {
        return $this->belongsTo(User::class);
    }   

    public function flight()
    {
        return $this->belongsTo(Flight::class, 'flight_id');
    }
}

<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'flight_id',
        'name',
        'amount'
    ];

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
}
?>
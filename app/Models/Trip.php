<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\Attributes\Ticket;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = ['departure_city', 'arrival_city', 'departure_time', 'arrival_time'];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}

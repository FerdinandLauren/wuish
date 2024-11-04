<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $table = 'admins';

    // Define fillable attributes
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Relationships with other tables
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function stations()
    {
        return $this->hasMany(Station::class);
    }

    public function trains()
    {
        return $this->hasMany(Train::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function seats()
    {
        return $this->hasMany(Seat::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function bookingHistories()
    {
        return $this->hasMany(BookingHistory::class);
    }
}

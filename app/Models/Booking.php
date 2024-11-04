<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = [
        'user_id',
        'schedule_id',
        'seat_id',
        'total_amount',
        'status',
        'admin_id', // To link to the Admin
    ];

    // Relationship to User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship to Schedule
    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    // Relationship to Seat
    public function seat()
    {
        return $this->belongsTo(Seat::class);
    }

    // Relationship to Admin
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}

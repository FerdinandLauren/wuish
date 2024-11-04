<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingHistory extends Model
{
    use HasFactory;

    protected $table = 'booking_histories';

    protected $fillable = [
        'user_id',
        'booking_id',
        'admin_id', // To link to the Admin
    ];

    // Relationship to User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship to Booking
    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    // Relationship to Admin
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}

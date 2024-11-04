<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';

    protected $fillable = [
        'booking_id',
        'amount',
        'payment_method',
        'admin_id', // To link to the Admin
    ];

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

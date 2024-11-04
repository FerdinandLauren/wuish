<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $table = 'schedules';

    protected $fillable = [
        'train_id',
        'station_id',
        'departure_time',
        'arrival_time',
        'admin_id', // To link to the Admin
    ];

    // Relationship to Train
    public function train()
    {
        return $this->belongsTo(Train::class);
    }

    // Relationship to Station
    public function station()
    {
        return $this->belongsTo(Station::class);
    }

    // Relationship to Admin
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}

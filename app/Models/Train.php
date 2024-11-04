<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    protected $table = 'trains';

    protected $fillable = [
        'name',
        'type',
        'admin_id', // To link to the Admin
    ];

    // Relationship to Admin
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    // Relationship to Schedules
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}

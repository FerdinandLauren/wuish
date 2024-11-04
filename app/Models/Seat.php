<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    protected $table = 'seats';

    protected $fillable = [
        'train_id',
        'class',
        'number',
        'admin_id', // To link to the Admin
    ];

    // Relationship to Train
    public function train()
    {
        return $this->belongsTo(Train::class);
    }

    // Relationship to Admin
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable = ['school_id', 'name', 'capacity'];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
    
}

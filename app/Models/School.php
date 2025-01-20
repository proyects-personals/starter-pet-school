<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'address',
        'phone_number',
        'email',
        'image',
    ];

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}

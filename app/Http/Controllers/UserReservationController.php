<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Classroom;

class UserReservationController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:user');
    }

    public function store(Request $request)
    {
        // Buscar el aula donde se quiere hacer la reserva
        $classroom = Classroom::findOrFail($request->classroom_id);
    
        // Verificar si ya existe una reserva para este usuario en este aula
        if ($classroom->reservations()->where('user_id', auth()->id())->exists()) {
            return redirect()->back()->with('error', 'Ya tienes una reserva para esta aula.');
        }
    
        // Crear la reserva con los datos proporcionados
        $reservation = Reservation::create([
            'user_id' => auth()->id(),
            'classroom_id' => $request->classroom_id,
            'school_id' => $request->school_id,
            'status' => 'pendiente',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
        // Reducir la capacidad del aula
        $classroom->decrement('capacity');
    
        return redirect()->back()->with('success', 'Reserva realizada con éxito.');
    }
    
}

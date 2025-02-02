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

    // Mostrar todas las reservas del usuario logueado
    public function index()
    {
        $reservations = Reservation::where('user_id', auth()->id())->get();
        return view('user.reservations.index', compact('reservations'));
    }

    // Mostrar el formulario de edición para la reserva seleccionada
    public function edit(Reservation $reservation)
    {
        // Verificar que la reserva pertenece al usuario logueado
        if ($reservation->user_id !== auth()->id()) {
            return redirect()->route('reservations.index')->with('error', 'No tienes permiso para editar esta reserva.');
        }

        return view('user.reservations.edit', compact('reservation'));
    }

    // Actualizar la reserva
    public function update(Request $request, Reservation $reservation)
    {
        // Verificar que la reserva pertenece al usuario logueado
        if ($reservation->user_id !== auth()->id()) {
            return redirect()->route('reservations.index')->with('error', 'No tienes permiso para actualizar esta reserva.');
        }

        // Validar los datos de la reserva
        $request->validate([
            'status' => 'required|in:pendiente,confirmada,cancelada',
        ]);

        // Actualizar la reserva
        $reservation->update([
            'status' => $request->status,
        ]);

        return redirect()->route('reservations.index')->with('success', 'Reserva actualizada con éxito.');
    }

    // Crear la reserva (ya está implementado en tu código)
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



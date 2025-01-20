<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;

class AdminReservationController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin');
    }

    public function update(Request $request, Reservation $reservation)
    {
        // Validamos que se haya enviado un valor para el estado
        $request->validate([
            'status' => 'required|in:Aprobado,Cancelado',
        ]);

        // Actualizamos el estado de la reserva
        $reservation->status = $request->input('status');
        $reservation->save();

        // Redirigimos de vuelta con un mensaje de éxito
        return redirect()->route('admin.dashboard')->with('success', 'Estado de la reserva actualizado.');
    }
}

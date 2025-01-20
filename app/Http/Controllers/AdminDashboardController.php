<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Reservation;

class AdminDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin'); // Asegura que solo los admins puedan acceder
    }

    public function index()
    {
        // Obtén todas las reservas, incluyendo las relaciones con el usuario y el aula
        $reservations = Reservation::with(['user', 'classroom'])->get();
    
        return view('admin.dashboard', compact('reservations'));
    }
}

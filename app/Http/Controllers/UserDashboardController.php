<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class UserDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:user'); // Asegura que solo los usuarios normales puedan acceder
    }

    public function index()
    {
        // Trae todas las escuelas
        $schools = School::all();

        // Pasar las escuelas a la vista
        return view('user.dashboard', compact('schools'));
    }
}

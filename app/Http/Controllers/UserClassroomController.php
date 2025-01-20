<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\School;

class UserClassroomController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:user'); // Asegura que solo los usuarios normales puedan acceder
    }

    public function show(School $school)
    {
        // Obtener todas las aulas de la escuela seleccionada
        $classrooms = $school->classrooms; // Asumiendo que la relación `classrooms` está definida en el modelo School

        // Pasar las aulas y la escuela a la vista
        return view('user.classrooms.show', compact('school', 'classrooms'));
    }
}

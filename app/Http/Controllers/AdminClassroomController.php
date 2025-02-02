<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Classroom;


class AdminClassroomController extends Controller
{
    public function create()
    {
        $schools = School::all();
        return view('admin.classrooms.create', compact('schools'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'school_id' => 'required|exists:schools,id',
            'name' => 'required|string|max:255',
            'capacity' => 'required|integer|min:1',
            'schedule' => 'required|string|max:255',
        ]);

        Classroom::create([
            'school_id' => $request->school_id,
            'name' => $request->name,
            'capacity' => $request->capacity,
            'schedule' => $request->schedule,

        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Aula creada exitosamente.');
    }

    public function index()
    {
        $classrooms = Classroom::all(); // O también puedes agregar paginación: ->paginate(10)
        return view('admin.classrooms.index', compact('classrooms'));
    }

    // Mostrar el formulario de edición de un aula
    public function edit(Classroom $classroom)
    {
        return view('admin.classrooms.edit', compact('classroom'));
    }

    // Actualizar el aula
    public function update(Request $request, Classroom $classroom)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'capacity' => 'required|integer|min:1',
            'schedule' => 'required|string|max:255',
        ]);

        $classroom->update($request->only(['name', 'capacity','schedule']));

        return redirect()->route('classrooms.index')->with('success', 'Aula actualizada correctamente');
    }

    // Eliminar un aula
    public function destroy(Classroom $classroom)
    {
        $classroom->delete();
        return redirect()->route('classrooms.index')->with('success', 'Aula eliminada correctamente');
    }
}

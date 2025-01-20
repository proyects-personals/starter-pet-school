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
        ]);

        Classroom::create([
            'school_id' => $request->school_id,
            'name' => $request->name,
            'capacity' => $request->capacity,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Aula creada exitosamente.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\School;

class AdminSchoolController extends Controller
{
    public function index()
    {
        $schools = School::all(); // Obtiene todas las escuelas
        return view('admin.schools.index', compact('schools')); // Retorna la vista con las escuelas
    }

    public function create()
    {
        return view('admin.schools.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'address' => 'required|string|max:255',
            'phone_number' => 'nullable|string|max:15',
            'email' => 'nullable|email|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Imagen con validación
        ]);
    
        // Guarda la imagen si existe
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }
    
        School::create([
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'image' => $imagePath,
        ]);
    
        return redirect()->route('admin.dashboard')->with('success', 'Escuela creada exitosamente.');
    }
    
    public function edit($id)
    {
        $school = School::findOrFail($id);
        return view('admin.schools.edit', compact('school'));
    }

    // Actualizar los datos de una escuela
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'address' => 'required|string|max:255',
            'phone_number' => 'nullable|string|max:15',
            'email' => 'nullable|email',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $school = School::findOrFail($id);
        $school->name = $request->name;
        $school->description = $request->description;
        $school->address = $request->address;
        $school->phone_number = $request->phone_number;
        $school->email = $request->email;
        
        if ($request->hasFile('image')) {
            // Eliminar la imagen antigua si existe
            if ($school->image) {
                \Storage::delete($school->image);
            }
            $path = $request->file('image')->store('public/schools');
            $school->image = $path;
        }

        $school->save();

        return redirect()->route('schools.index')->with('success', 'Escuela actualizada correctamente.');
    }

    // Eliminar una escuela
    public function destroy($id)
    {
        $school = School::findOrFail($id);
        
        // Eliminar la imagen asociada
        if ($school->image) {
            \Storage::delete($school->image);
        }

        $school->delete();

        return redirect()->route('schools.index')->with('success', 'Escuela eliminada correctamente.');
    }
}

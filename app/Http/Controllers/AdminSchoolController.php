<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\School;

class AdminSchoolController extends Controller
{
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
    
}

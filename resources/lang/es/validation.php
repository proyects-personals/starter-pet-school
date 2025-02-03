<?php

return [
    'required' => 'El campo :attribute es obligatorio.',
    'email' => 'El campo :attribute debe ser un correo electrónico válido.',
    'min' => [
        'string' => 'El campo :attribute debe tener al menos :min caracteres.',
        'numeric' => 'El campo :attribute debe ser al menos :min.',
    ],
    'max' => [
        'string' => 'El campo :attribute no puede tener más de :max caracteres.',
        'numeric' => 'El campo :attribute no puede ser mayor que :max.',
    ],
    'confirmed' => 'La confirmación de :attribute no coincide.',
    'unique' => 'El :attribute ya está en uso.',
    'numeric' => 'El campo :attribute debe ser un número.',
    'integer' => 'El campo :attribute debe ser un número entero.',
    'date' => 'El campo :attribute no es una fecha válida.',
    'exists' => 'El :attribute seleccionado no es válido.',

    // Mensaje personalizado para 'auth.failed'
    'failed' => 'Estas credenciales no coinciden con nuestros registros.',

    'attributes' => [
        'name' => 'nombre',
        'email' => 'correo electrónico',
        'password' => 'contraseña',
        'password_confirmation' => 'confirmación de la contraseña',
    ],

    
];
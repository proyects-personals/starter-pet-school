<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboards') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-3xl font-semibold mb-6">Dashboard del Administrador</h1>
                    
                    <h2 class="text-2xl font-medium mb-4">Crear Escuela</h2>

                    <form action="{{ route('schools.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <!-- Nombre de la escuela -->
                        <div>
                            <label for="name" class="block text-lg font-medium text-gray-700 dark:text-gray-300">Nombre de la Escuela</label>
                            <input 
                                type="text" 
                                name="name" 
                                id="name" 
                                required 
                                class="mt-2 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            >
                            @error('name')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Descripción -->
                        <div>
                            <label for="description" class="block text-lg font-medium text-gray-700 dark:text-gray-300">Descripción</label>
                            <textarea 
                                name="description" 
                                id="description" 
                                rows="4" 
                                class="mt-2 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            ></textarea>
                            @error('description')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Dirección -->
                        <div>
                            <label for="address" class="block text-lg font-medium text-gray-700 dark:text-gray-300">Dirección</label>
                            <input 
                                type="text" 
                                name="address" 
                                id="address" 
                                required
                                class="mt-2 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            >
                            @error('address')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Teléfono -->
                        <div>
                            <label for="phone_number" class="block text-lg font-medium text-gray-700 dark:text-gray-300">Teléfono</label>
                            <input 
                                type="text" 
                                name="phone_number" 
                                id="phone_number" 
                                class="mt-2 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            >
                            @error('phone_number')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Correo electrónico -->
                        <div>
                            <label for="email" class="block text-lg font-medium text-gray-700 dark:text-gray-300">Correo Electrónico</label>
                            <input 
                                type="email" 
                                name="email" 
                                id="email" 
                                class="mt-2 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            >
                            @error('email')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Imagen -->
                        <div>
                            <label for="image" class="block text-lg font-medium text-gray-700 dark:text-gray-300">Imagen</label>
                            <input 
                                type="file" 
                                name="image" 
                                id="image" 
                                class="mt-2 p-2 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            >
                            @error('image')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Botón de enviar -->
                        <div>
                            <button 
                                type="submit" 
                                class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
                            >
                                Crear Escuela
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

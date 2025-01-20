<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Aulas Disponibles en: ' . $school->name) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-xl font-bold mb-4">Aulas Disponibles</h1>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($classrooms as $classroom)
                            <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white dark:bg-gray-700">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2">{{ $classroom->name }}</div>
                                    <p class="text-gray-700 text-base">{{ $classroom->description }}</p>
                                    <p class="text-gray-600 text-sm">Capacidad: {{ $classroom->capacity }}</p>

                                    @if ($classroom->capacity > 0)
                                        @php
                                            $hasReservation = $classroom->reservations()->where('user_id', auth()->id())->exists();
                                        @endphp

                                        @if ($hasReservation)
                                            <p class="text-red-500 text-sm mt-2">Ya tienes una reserva para esta aula.</p>
                                        @else
                                            <!-- Botón para realizar la reserva -->
                                            <form action="{{ route('reservations.create') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="classroom_id" value="{{ $classroom->id }}">
                                                <input type="hidden" name="school_id" value="{{ $school->id }}">
                                                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                                <input type="hidden" name="status" value="pendiente">

                                                <div class="mb-4">
                                                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Reservar Aula</button>
                                                </div>
                                            </form>
                                        @endif
                                    @else
                                        <p class="text-red-500 text-sm mt-2">No hay capacidad disponible para esta aula.</p>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>

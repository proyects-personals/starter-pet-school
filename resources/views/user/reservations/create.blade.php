<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear Reserva') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-xl font-bold mb-4">Reserva una Aula</h1>

                    <form action="{{ route('reservations.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="classroom_id" class="block text-sm font-medium text-gray-700">Aula</label>
                            <select name="classroom_id" id="classroom_id" class="mt-1 block w-full">
                                @foreach ($classrooms as $classroom)
                                    <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="reservation_date" class="block text-sm font-medium text-gray-700">Fecha de la reserva</label>
                            <input type="date" name="reservation_date" id="reservation_date" class="mt-1 block w-full">
                        </div>

                        <div class="mb-4">
                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Reservar Aula</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

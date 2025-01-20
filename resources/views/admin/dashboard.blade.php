<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Reservas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-semibold mb-6">Reservas Realizadas</h1>

                    <table class="min-w-full table-auto">
                        <thead>
                            <tr class="border-b">
                                <th class="px-4 py-2 text-left">Usuario</th>
                                <th class="px-4 py-2 text-left">Email</th>
                                <th class="px-4 py-2 text-left">Escuela</th>
                                <th class="px-4 py-2 text-left">Aula</th>
                                <th class="px-4 py-2 text-left">Fecha de Reserva</th>
                                <th class="px-4 py-2 text-left">Estado</th>
                                <th class="px-4 py-2 text-left">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reservations as $reservation)
                                <tr class="border-b">
                                    <td class="px-4 py-2">{{ $reservation->user->name }}</td>
                                    <td>({{ $reservation->user->email }})</td>
                                    <td>({{ $reservation->school->name }})</td>
                                    <td class="px-4 py-2">{{ $reservation->classroom->name }}</td>
                                    <td class="px-4 py-2">{{ $reservation->created_at->format('d/m/Y H:i') }}</td>
                                    <td class="px-4 py-2">{{ $reservation->status }}</td>
                                    <td class="px-4 py-2">
                                        <form action="{{ route('reservations.update', $reservation->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" name="status" value="Aprobado" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">Aprobar</button>
                                        </form>
                                        <form action="{{ route('reservations.update', $reservation->id) }}" method="POST" class="inline-block ml-2">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" name="status" value="Cancelado" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">Cancelar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

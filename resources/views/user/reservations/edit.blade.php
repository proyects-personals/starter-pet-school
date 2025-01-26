<h1>Editar Reserva</h1>

<form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="status">Estado</label>
        <select name="status" id="status" required>
            <option value="pendiente" @if($reservation->status == 'pendiente') selected @endif>Pendiente</option>
            <option value="confirmada" @if($reservation->status == 'confirmada') selected @endif>Confirmada</option>
            <option value="cancelada" @if($reservation->status == 'cancelada') selected @endif>Cancelada</option>
        </select>
    </div>

    <button type="submit">Actualizar Reserva</button>
</form>
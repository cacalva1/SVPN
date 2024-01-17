<table class="table table-striped table-hover">
    <thead class="thead">
        <tr>
            <th># </th>
            <th>Tipo</th>
            <th>Circuito</th>
            <th>Subcircuito</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $sugerencium)
            <tr>
                <td>{{ $sugerencium->contador }}</td>
                <td>{{ $sugerencium->tipo }}</td>
                <td>{{ $sugerencium->nombre_circuito }}</td>
                <td>{{ $sugerencium->nombre_subcircuito }}</td>
                <td>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

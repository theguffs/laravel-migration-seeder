<h1>Treni</h1>

<table>
    <thead>
        <tr>
            <th>Azienda</th>
            <th>Stazione di partenza</th>
            <th>Stazione di arrivo</th>
            <th>Orario di partenza</th>
            <th>Orario di arrivo</th>
            <th>Codice Treno</th>
            <th>Numero Carrozze</th>
            <th>In orario</th>
            <th>Cancellato</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($treni as $treno )
            <td>{{ $treno->azienda }}</td>
            <td>{{ $treno->stazione_partenza }}</td>
            <td>{{ $treno->stazione_arrivo }}</td>
            <td>{{ $treno->orario_partenza }}</td>
            <td>{{ $treno->orario_arrivo }}</td>
            <td>{{ $treno->codice_treno }}</td>
            <td>{{ $treno->numero_carrozze }}</td>
            <td>{{ $treno->in_orario ? 'Sì' : 'No' }}</td>
            <td>{{ $treno->cancellato ? 'Sì' : 'No' }}</td>
        @endforeach
            
    </tbody>
</table>

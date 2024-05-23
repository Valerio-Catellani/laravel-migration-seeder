<table class="table table-dark table-hover shadow mb-5">
    <thead>
        <tr>
            <th scope="col">Codice Treno</th>
            <th scope="col">Azienda</th>
            <th scope="col">Stazione di Partenza</th>
            <th scope="col">Stazione di Arrivo</th>
            <th scope="col">Orario di Partenza</th>
            <th scope="col">Orario di Arrivo</th>
            <th scope="col">In Orario</th>
            <th scope="col">Cancellato</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($trains as $train)
            <tr <?php
            echo $train->in_orario ? 'class="on-time"' : ($train->cancellato ? 'class="cancelled"' : 'class="late"');
            ?>>
                <td>{{ $train->codice_treno }}</td>
                <td>{{ $train->azienda }}</td>
                <td>{{ $train->stazione_di_partenza }}</td>
                <td>{{ $train->stazione_di_arrivo }}</td>
                <td>{{ $train->orario_di_partenza }}</td>
                <td>{{ $train->orario_di_arrivo }}</td>
                <td>{{ $train->in_orario ? 'Si' : 'No' }}</td>
                <td>{{ $train->cancellato ? 'Si' : 'No' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@foreach ($historiques as $historique)
    <tr>
        <th scope='row'>{{ $historique->id }}</th>
        <td>{{ $historique->identite_nom }}</td>
        <td>{{ $historique->dateEvenement }}</td>
        <td>{{ $historique->porte_nom }}</td>
        <td>{{ $historique->etatEvenement }}</td>
    </tr>
@endforeach
<tr><th colspan="5">{{ $historiques->links() }}</th></tr>



<h1> List d_proffesseur </h1>

<table>

    <tr>
        <th>idP</th>
        <th>nom</th>
        <th>prenom</th>
        <th>tel</th>
        <th>email</th>
        <th>departATT</th>
        <th>dateRecrut</th>
        <th>PPR</th>
        <th>grad</th>
        <th>dateEffet</th>
        <th>TypeAvancement</th>
    </tr>

    @foreach ($datas as $item)
        <tr>
            <th>{{ $item->idP }}</th>
            <th>{{ $item->nom }}</th>
            <th>{{ $item->prenom }}</th>
            <th>{{ $item->tel }}</th>
            <th>{{ $item->email }}</th>
            <th>{{ $item->departATT }}</th>
            <th>{{ $item->dateRecrut }}</th>
            <th>{{ $item->PPR }}</th>
            <th>{{ $item->grad }}</th>
            <th>{{ $item->dateEffet }}</th>
            <th>{{ $item->TypeAvancement }}</th>
        </tr>
    @endforeach
    @if (isset($SingleP))
        <h1>{{ $SingleP->nom }}</h1>
    @endif

</table>

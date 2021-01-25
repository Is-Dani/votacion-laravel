<div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Sigla</th>
                <th>Representante</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($partidos as $partido)
                <tr>
                    <td>{{$partido->id}}</td>
                    <td>{{$partido->nombre}}</td>
                    <td>{{$partido->sigla}}</td>
                    <td>{{$partido->representante}}</td>
                    <td>
                        <a href="">Editar</a>
                        <a href="">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
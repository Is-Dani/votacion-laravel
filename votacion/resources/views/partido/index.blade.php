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
                        <a href="{{route('partidos.edit',$partido)}}">Editar</a>
                        <form  action="{{route('partidos.destroy',$partido)}}" method="POST">
                        {{csrf_field()}}
                        @method('DELETE')
                        <button>Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<a href="{{route('partidos.create')}}">Insertar</a>
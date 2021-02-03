<form action="{{route('partidos.update',$partido)}}" method="POST">
    {{csrf_field()}}
    @method('PUT')

    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre" value="{{$partido->nombre}}"><br>
    <label for="sigla">Sigla</label>
    <input type="text" id="sigla" name="sigla" value="{{$partido->sigla}}" ><br>
    <label for="representante">Representante</label>
    <input type="text" id="representante" name="representante" value="{{$partido->representante}}"><br>
    <input type="submit" value="Enviar" id="enviar">
</form>
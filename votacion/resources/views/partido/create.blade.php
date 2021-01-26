<form action="{{route('partidos.store',$partido)}}" method="POST">
    {{csrf_field()}}

    <p>LOGIN</p>
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre"><br>
                <label for="sigla">Sigla</label>
                <input type="text" id="sigla" name="sigla"><br>
                <label for="representante">Representante</label>
                <input type="text" id="representante" name="representante"><br>
                <input type="submit" value="Enviar" id="enviar" >
</form>
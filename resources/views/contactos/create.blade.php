 @extends('layout.plantilla')
@section('contenido')
    <form action="{{ route('contactos.store')}}" method="POST">
        @csrf 
        <div>
            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control">
        </div>

        <div>
            <label for="">Correo Electronico</label>
            <input type="text" name="correo" class="form-control">
        </div>
        <div>
            <label for="">Telefono</label>
            <input type="text" name="telefono" class="form-control">

        </div>
        <div>
            <label for="">Mensaje</label>
            <input type="text" name="mensaje" class="form-control">
        </div>
        <div>
            <input type="submit" value="Enviar" class="btn btn-success">
        </div>
</form>    
@endsection 
@extends('layout.plantilla')
@section('contenido')
    <h1>Contacto</h1>
    <hr>
    <div>
        <a href="{{route('contactos.create') }}" class="btn btn-primary">Contactar</a>
    </div>
        <!-- <table class="table">
            <thead>
                <td>ID</td>
                <td>NOMBRE</td>
                <td>CORREO</td>
                <td>TELEFONO</td>
                <td>MENSAJE</td>
                <td>CREADO</td>
                <td>OPCION</td>
            </thead>
            <tbody>
                @foreach($contactos as $contacto)
                    <tr>
                        <td>{{$contacto->id}}</td>
                        <td>{{$contacto->nombre}}</td>
                        <td>{{$contacto->correo}}</td>
                        <td>{{$contacto->telefono}}</td>
                        <td>{{$contacto->mensaje}}</td>
                        <td>{{$contacto->created_at}}</td>
                       
                        <td class="btn-group">
                            <a class= "btn btn-primary" href="{{route('contactos.show', $contacto->id) }}">+</a>
                            <a class= "btn btn-warning" href="{{route('contactos.edit', $contacto->id) }}">Editar</a>
                            <form action= "{{route('contactos.show', $contacto->id) }}"method="POST">
                                @method('DELETE')
                                @csrf
                                <input class="btn btn-danger" type="submit" value="Eliminar">

                            </form>
                        </td>

                    </tr>
                    @endforeach
            </tbody>
        </table> -->
@endsection
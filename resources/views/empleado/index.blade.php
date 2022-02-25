@extends('layouts.app')
@section('content')
<div class="container">
    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{Session::get('mensaje')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    
    <a href="{{ url('empleado/create') }}" class="btn btn-success">Registrar un nuevo empleado</a>
    <br>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <!-- <th>Id</th> -->
                <th>Foto</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Cedula</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleados as $empleado)
            <tr>
                <!-- <td>{{$empleado -> id}}</td> -->
                <td>
                    <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->foto }}" alt="imagen de perfil" width="100">
                </td>
                <td>{{$empleado -> nombres}}</td>
                <td>{{$empleado -> apellidos}}</td>
                <td>{{$empleado -> cedula}}</td>
                <td>
                    <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-warning">
                        Editar 
                    </a>
                | 
                    <form action="{{ url( '/empleado/'.$empleado->id ) }}" method="post" class="d-inline">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" onclick="return confirm('Estas seguro de eliminar el registro')" value="Borrar" class="btn btn-danger">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $empleados->links() !!}
</div>
@endsection

@extends('layout')

@section('contenido')
	<h1>Clientes</h1>
    @if (session('save'))
            <div class="alert alert-success" role="alert">
               {{session('save')}}
            </div>
    @elseif(session('delete'))

            <div class="alert alert-danger" role="alert">
               {{session('delete')}}
            </div>

    @endif
    <a href="{{route('clientes.create')}}" class="btn btn-primary">Nuevo Cliente</a><hr>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cédula</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Tipo de Cliente</th>
                <th>Editar</th>
                <th>Papelera</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clientes as $cliente)    
            <tr>
                <td>{{$cliente->name}}</td>
                <td>{{$cliente->ced}}</td>
                <td>{{$cliente->telefono}}</td>
                <td>{{$cliente->email}}</td>
                <td>{{$cliente->tipo}}</td>
                <td><a href="{{route('clientes.edit', $cliente->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a></td>
                <td>
                    <form action="{{route('clientes.destroy', $cliente->id)}}" method="POST">
                        @csrf
                        {!!method_field('DELETE')!!}
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro quieres mover a la papelera a {{$cliente->name}}?')"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Cédula</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Tipo de Cliente</th>
                <th>Editar</th>
                <th>Papelera</th>
            </tr>
        </tfoot>
    </table>
@endsection
@extends('layout')

@section('contenido')
	<h1>Clientes Eliminados</h1>
    @if (session('save'))
            <div class="alert alert-success" role="alert">
               {{session('save')}}
            </div>
    @elseif(session('delete'))

            <div class="alert alert-danger" role="alert">
               {{session('delete')}}
            </div>

    @endif
    
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cédula</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Tipo de Cliente</th>
                <th>Restaurar</th>
                <th>Eliminar Permanentemente</th>
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
                <td>
                    <a href="{{route('cliente.restaurar', $cliente->id)}}" class="btn btn-success btn-sm">
                        <i class="fas fa-redo-alt"></i>
                    </a>
                </td>
                <td>
                    <form action="{{route('cliente.permanente', $cliente->id)}}" method="POST">
                        @csrf
                        {!!method_field('DELETE')!!}
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro quieres eliminar a {{$cliente->name}}?')"><i class="fas fa-trash-alt"></i></button>
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
                <th>Restaurar</th>
                <th>Eliminar Permanentemente</th>
            </tr>
        </tfoot>
    </table>
@endsection
@extends('layout')

@section('contenido')
	<h1>Libros</h1>
    @if (session('save'))
            <div class="alert alert-success" role="alert">
               {{session('save')}}
            </div>
    @elseif(session('delete'))

            <div class="alert alert-danger" role="alert">
               {{session('delete')}}
            </div>

    @endif
    <a href="{{route('libros.create')}}" class="btn btn-primary">Nuevo Libro</a><hr>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Editorial</th>
                <th>ISBN</th>
                <th>Stock</th>
                <th>Autor</th>
                <th>Fecha de Publicación</th>
                <th>Editar</th>
                <th>Papelera</th>
            </tr>
        </thead>
        <tbody>
        @foreach($libros as $libro)
            <tr>
                <td>{{$libro->nombre}}</td>
                <td>{{$libro->editorial}}</td>
                <td>{{$libro->isbn}}</td>
                <td>{{$libro->cantidad}}</td>
                <td>{{$libro->autors->pluck('name')->implode(',')}}</td>
                <td>{{$libro->fecha_publicacion->format('M d Y')}}</td>
                <td><center>
                    <a href="{{route('libros.edit', $libro->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                </center></td>
                <td>
                    <center>
                        <form action="{{route('libros.destroy', $libro->id)}}" method="POST">
                        @csrf
                        {!!method_field('DELETE')!!}
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro quieres eliminar a {{$libro->nombre}}?')"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    </center>
                </td>
            </tr>
        @endforeach  
        </tbody>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Editorial</th>
                <th>ISBN</th>
                <th>Stock</th>
                <th>Autor</th>
                <th>Fecha de Publicación</th>
                <th>Editar</th>
                <th>Papelera</th>
            </tr>
        </tfoot>
    </table>
@endsection
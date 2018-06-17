@extends('layout')

@section('contenido')
	<h1>Autores</h1>
    @if (session('save'))
            <div class="alert alert-success" role="alert">
               {{session('save')}}
            </div>
    @elseif(session('delete'))

            <div class="alert alert-danger" role="alert">
               {{session('delete')}}
            </div>

    @endif
    <a href="{{route('autores.create')}}" class="btn btn-primary">Nuevo Autor <i class="fas fa-user-plus"></i></a><hr>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th><center>Nombre</center></th>
                <th><center>Libros</center></th>
                <th><center>Editar</center></th>
                <th><center>Papelera</center></th>
            </tr>
        </thead>
        <tbody>
            @foreach($autores as $autor)
            <tr>
                <td><center>{{$autor->name}}</center></td>
                <td><center>{{$autor->books->pluck('nombre')->implode(', ')}}</center></td>
                <td><center><a href="{{route('autores.edit', $autor->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a></center></td>
                <td>
                    <center>
                        <form action="{{route('autores.destroy', $autor->id)}}" method="POST">
                        @csrf
                        {!!method_field('DELETE')!!}
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro quieres mover a la papelera a {{$autor->name}}?')"><i class="fas fa-trash-alt"></i></button>
                    </form>
                    </center>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th><center>Nombre</center></th>
                <th><center>Libros</center></th>
                <th><center>Editar</center></th>
                <th><center>Papelera</center></th>
            </tr>
        </tfoot>
    </table>
@endsection
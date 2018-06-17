@extends('layout')

@section('contenido')
    <h1>Autores  Eliminados</h1>
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
                
                <th><center>Restaurar</center></th>
            </tr>
        </thead>
        <tbody>
            @foreach($autores as $autor)
            <tr>
                <td><center>{{$autor->name}}</center></td>
                <td><center><a href="{{route('autor.restaurar', $autor->id)}}" class="btn btn-success btn-sm"><i class="fas fa-redo-alt"></i></a></center></td>
                
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th><center>Nombre</center></th>
                
                <th><center>Restaurar</center></th>
            </tr>
        </tfoot>
    </table>
@endsection
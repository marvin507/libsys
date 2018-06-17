@extends('layout')

@section('contenido')
	<h1>Ordenes</h1>
    @if (session('save'))
            <div class="alert alert-success" role="alert">
               {{session('save')}}
            </div>
    @elseif(session('delete'))

            <div class="alert alert-danger" role="alert">
               {{session('delete')}}
            </div>

    @endif
    <a href="{{route('ordenes.create')}}" class="btn btn-primary">Nueva Orden</a><hr>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Libros Prestados</th>
                <th>Estado</th>
                <th>Fecha de Salida</th>
                <th>Fecha de Entrega</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ordenes as $orden)   
            <tr>
                <td>{{$orden->id}}</td>
                <td>{{$orden->client->name}}</td>
                <td>{{$orden->books->pluck('nombre')->implode(', ')}}</td>
                <td>{{$orden->estado}}</td>
                <td><span class="badge badge-success">{{$orden->fecha_salida->format('d M Y')}}</span></td>
                
                <td>
                    
                    
                    @if($orden->fecha_entrada->format('dmy') > $fecha->format('dmy'))
                            <span class="badge badge-warning">{{$orden->fecha_entrada->format('d M Y')}}</span>
                        @else   
                            <span class="badge badge-danger">{{$orden->fecha_entrada->format('d M Y')}}</span>
                    
                        @endif
                </td>

                <td><a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a></td>
                <td>
                    <form action="" method="POST">
                        @csrf
                        {!!method_field('DELETE')!!}
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro quieres eliminar a ?')"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Libros Prestados</th>
                <th>Estado</th>
                <th>Fecha de Salida</th>
                <th>Fecha de Entrada</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </tfoot>
    </table>
@endsection
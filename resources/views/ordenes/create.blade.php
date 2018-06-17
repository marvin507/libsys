@extends('layout')

@section('contenido')

<form class="form-horizontal" action="{{route('ordenes.store')}}" method="POST">
	@csrf
<fieldset>

<!-- Form Name -->
<legend>Nueva Orden</legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="cliente">Cliente</label>
  <div class="col-md-4">
    <select id="cliente" name="client_id" class="form-control">
    	@foreach($clientes as $cliente)
      		<option value="{{$cliente->id}}">{{$cliente->name}}</option>
      	@endforeach
    </select>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="libros">Libros </label>
  <div class="col-md-4">
@foreach($libros as $libro)
  <div class="checkbox">
    <label for="libros-0">
      <input type="checkbox" name="libros[]"  value="{{$libro->id}}">
      {{$libro->nombre}}-{{$libro->cantidad}}
    </label>
	</div>
@endforeach
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Estado</label>
  <div class="col-md-4">
    <select id="selectbasic" name="estado" class="form-control">
      <option value="prestado">Prestado</option>
      <option value="encargado">Encargado</option>
      <option value="entragado">Entregado</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fecha_salida">Fecha de Salida</label>  
  <div class="col-md-3">
  <input id="fecha_salida" name="fecha_salida" type="date" placeholder="salida del libro" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fecha_entrada">Fecha de Entrada</label>  
  <div class="col-md-3">
  <input id="fecha_entrada" name="fecha_entrada" type="date" placeholder="devolución del libro" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</div>

</fieldset>
</form>

@endsection
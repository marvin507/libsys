@extends('layout')

@section('contenido')
		
		<form class="form-horizontal" method="POST" action="{{route('clientes.update', $cliente->id)}}">
      @csrf
      {!!method_field('PUT')!!}
<fieldset>

<!-- Form Name -->
<legend>Nuevo Cliente</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Nombre</label>  
  <div class="col-md-12">
  <input value="{{$cliente->name}}" name="name" type="text" placeholder="nombre completo" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ced">Cédula</label>  
  <div class="col-md-12">
  <input value="{{$cliente->ced}}" name="ced" type="text" placeholder="CID" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telefono">Telefono</label>  
  <div class="col-md-12">
  <input value="{{$cliente->telefono}}" name="telefono" type="text" placeholder="telefono o movil" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Correo Electrónico</label>  
  <div class="col-md-12">
  <input value="{{$cliente->email}}" name="email" type="email" placeholder="email" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="tipo">Tipo de Cliente</label>
  <div class="col-md-4">
    <select id="tipo" name="tipo" class="form-control">
      <option value="">Seleccione una opcion</option>
      <option value="profesor" {{$cliente->tipo === 'profesor' ? 'selected' : ''}}>Profesor</option>
      <option value="estudiante" {{$cliente->tipo === 'estudiante' ? 'selected' : ''}}>Estudiante</option>
      <option value="administrativo" {{$cliente->tipo === 'administrativo' ? 'selected' : ''}}>Administrativo</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-success">Actualizar</button>
  </div>
</div>

</fieldset>
</form>


@endsection
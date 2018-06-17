@extends('layout')

@section('contenido')

	<form class="form-horizontal" method="POST" action="{{route('autores.update', $autor->id)}}">
		@csrf
    {!!method_field('PUT')!!}
<fieldset>

<!-- Form Name -->
<legend>Nuevo Autor</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Nombre</label>  
  <div class="col-md-12">
  <input id="name" name="name" type="text" placeholder="nombre completo" class="form-control input-md" required="" value="{{$autor->name}}">
    {!!$errors->first('name', ':message')!!}
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-success">Actualizar <i class="fas fa-sync"></i></button>
  </div>
</div>

</fieldset>
</form>


@endsection
@extends('layout')

@section('contenido')
	<form class="form-horizontal" action="{{route('libros.store')}}" method="POST">
		@csrf
<fieldset>

<!-- Form Name -->
<legend>Nuevo Libro</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Nombre</label>  
  <div class="col-md-12">
  <input id="name" name="nombre" type="text" placeholder="nombre del libro" class="form-control input-md" required="" value="{{old('nombre')}}">
    {!!$errors->first('nombre', 'Este :message')!!}
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="editorial">Editorial</label>  
  <div class="col-md-12">
  <input id="editorial" name="editorial" type="text" placeholder="nombre del editorial" class="form-control input-md" required="" value="{{old('editorial')}}">
    {!!$errors->first('editorial', ':message')!!}
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="isbn">ISBN</label>  
  <div class="col-md-12">
  <input id="isbn" name="isbn" type="text" placeholder="Número Internacional Normalizado del Libro" class="form-control input-md" required="" value="{{old('isbn')}}">
    {!!$errors->first('isbn', ':message')!!}
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="isbn">Cantidad</label>  
  <div class="col-md-12">
  <input  name="cantidad" type="text" placeholder="cantidad en stock" class="form-control input-md" required="" value="{{old('cantidad')}}">
    {!!$errors->first('cantidad', ':message')!!}
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fecha_publicacion">Publicado</label>  
  <div class="col-md-3">
  <input id="fecha_publicacion" name="fecha_publicacion" type="date" placeholder="fecha de publicación" class="form-control input-md" required="" value="{{old('fecha_publicacion')}}">
    {!!$errors->first('fecha_publicacion', ':message')!!}
  </div>
</div>




<!-- Multiple Checkboxes -->
<div class="form-group">

    <label class="col-md-4 control-label" for="autores">Autores -  
      <a href="{{route('autores.create')}}">Agregar Autor</a>
    </label>
    
      <div class="col-md-12">
          @foreach($autores as $id => $autor)
            <div class="checkbox">
                <label for="autores-0">
                <input type="checkbox" name="autores[]" value="{{$id}}">
                {{$autor}}
                </label>
            </div>
          @endforeach
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
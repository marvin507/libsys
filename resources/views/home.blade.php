@extends('layout')

@section('contenido')
	<h1>Panel Principal</h1>

	<div class="row">
		<div class="col-md-3">
			<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
			  <div class="card-header"><i class="fas fa-users"></i></div>
			  <div class="card-body">
			    <h5 class="card-title">Clientes</h5>
			    <p class="card-text">Aquí podemos administrar todos nuestros clientes.</p>
			  </div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
				  <div class="card-header"><i class="fas fa-book"></i></div>
				  <div class="card-body">
				    <h5 class="card-title">Libros</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				</div>
		</div>
		<div class="col-md-3">
			<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header"><i class="fas fa-exclamation-triangle"></i></div>
  <div class="card-body">
    <h5 class="card-title">Ordenes Pendientes</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
		</div>
		<div class="col-md-3">
			<div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
  <div class="card-header"><i class="fas fa-shopping-cart"></i></div>
  <div class="card-body">
    <h5 class="card-title">Libros Prestados</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
		</div>
	</div>
@endsection
<?php


// Authentication Routes...
Route::get('/', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('panel',function(){

	return view('home');
})->middleware('auth');

Route::resource('panel/autores', 'AutoresController');
Route::resource('panel/libros', 'LibrosController');
Route::resource('panel/clientes', 'ClientesController');
Route::resource('panel/ordenes', 'OrdenesController');
//Route::resource('panel/usuarios', 'UsersController');

//rutas para mostrar y restaurar clientes

Route::get('panel/clients', 'DeleteDataController@showDeleteClient')->name('cliente.borrado');
Route::get('panel/clients/{id}', 'DeleteDataController@restCliente')->name('cliente.restaurar');
Route::delete('panel/clients/{id}', 'DeleteDataController@deleteCliente')->name('cliente.permanente');

//rutas para mostrar y restaurar autores

Route::get('panel/autors/eliminados', 'DeleteDataController@showDeleteAutor')->name('autor.borrado');
Route::get('panel/autors/restore/{id}', 'DeleteDataController@restAutor')->name('autor.restaurar');


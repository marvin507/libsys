<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Autor;
class DeleteDataController extends Controller
{
     public function __construct(){

        $this->middleware('auth');
    }

    //vista para clientes eliminados

    public function showDeleteClient(){

    	$clientes = Client::onlyTrashed()->get();
    	return view('clientes.delete', compact('clientes'));
    }

    //metodo para restaurar cliente

    public function restCliente($id){

    	Client::onlyTrashed()->where('id', $id)->restore();
    	return back()->with('save', 'Datos restaurados');
    }
    public function deleteCliente($id){

            Client::onlyTrashed()->where('id', $id)->forceDelete();
            return back();
            

    }

    //vista para autores eliminados

     public function showDeleteAutor(){

        $autores = Autor::onlyTrashed()->get();
        return view('autores.delete', compact('autores'));
    }

    //metodo para restaurar autor

    public function restAutor($id){

        Autor::onlyTrashed()->where('id', $id)->restore();
        return back()->with('save', 'Datos restaurados');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Autor;
use App\Book;
use App\Http\Requests\BooksRequestCheck;
use App\Http\Requests\UpdateBookCheck;
class LibrosController extends Controller
{

     public function __construct(){

        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Book::all();
        return view('libros.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autores = Autor::pluck('name', 'id');
        return view('libros.create', compact('autores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BooksRequestCheck $request)
    {   

        $libro = Book::create($request->all());
        $libro->autors()->attach($request->autores);
        return redirect()->route('libros.index')->with('save', 'Libro Guardado Satisfactoriamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $libro = Book::findOrFail($id);
        $autores = Autor::pluck('name', 'id');
        return view('libros.edit', compact('libro', 'autores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookCheck $request, $id)
    {
        $libro = Book::findOrFail($id);
        $libro->update($request->all());
        $libro->autors()->sync($request->autores);
        return redirect()->route('libros.index')->with('save', 'Datos Actualizados correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::findOrFail($id)->delete();
        return back()->with('delete', 'Eliminado de la base de datos');
    }
}

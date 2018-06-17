<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BooksRequestCheck extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        
        return [
            'nombre' => 'required|unique:books,nombre',
            'editorial' => 'required',
            'isbn' => 'required|integer|unique:books,isbn',
            'cantidad' =>'required|integer',
            'fecha_publicacion' => 'required'
        ];
    }
}

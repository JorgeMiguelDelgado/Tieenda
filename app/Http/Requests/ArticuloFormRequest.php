<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticuloFormRequest extends FormRequest
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
            'nombre'=>'required|max:510',
            'descripcion'=>'max:510',
            'cantidad'=>'required|numeric',
            'precio'=>'required|numeric',
            'imagen'=>'mimes:jpeg,bmp,png'
            
        ];
    }
}

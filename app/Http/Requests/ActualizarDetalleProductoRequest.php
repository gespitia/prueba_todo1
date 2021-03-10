<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarDetalleProductoRequest extends FormRequest
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
        $id = $this->detalleproducto;
        return [
            'id_producto'=>'required',
            'descripcion'=>'required',
            'valorUnitario'=>'required',
            'cantidadSaldo'=>'required',
            'valorSaldo'=>'required',
        ];
    }
}

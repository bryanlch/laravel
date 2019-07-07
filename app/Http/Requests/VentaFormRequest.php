<?php

namespace sisVentas\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VentaFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'=>'requerid',
            'tipo_comprobante'=>'requerid',
            'serie_comprobante'=>'requerid',
            'numero_comprobante'=>'requerid',
            'fecha_hora'=>'requerid',
            'total_venta'=>'requerid',
            'estado'=>'requerid'
        ];
    }
}

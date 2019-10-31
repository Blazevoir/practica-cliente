<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
     
    public function attributes(){
         return [
             'nombre' => 'Nombre del cliente',
             'apellidos' => 'Apellidos del cliente',
             'fechaNac' => 'Fecha nacimiento del cliente',
             'email' => 'Email del cliente',
             'telefono' => 'Telefono del cliente',
             'direccion' => 'Direccion del cliente',
             'estadoCivil' => 'Estado civil del cliente',
             'sueldo' => 'Sueldo anual del cliente',
             'ip' => 'Ip del cliente',
             ];
     }
     
    public function authorize()
    {
        return true;
    }

    public function messages(){
        $required = 'El campo :attribute es obligatorio.';
        $min = 'La longitud mínima del campo :attribute es :min';
        $max = 'La longitud máxima del campo :attribute es :max';
        $date = 'La fecha debe tener un formato correcto';
        $numeric = 'El valor del campo :attribute debe ser numérico.';
        $gte = 'El valor del campo :attribute debe ser mayor o igual a cero.';
        $lte = 'El valor del campo :attribute no debe ser mayor que uno.';
        $telefono = 'El telefono ha de tener 9 digitos';
        return[
            'nombre.required'   => $required,
            'nombre.min'   => $min,
            'nombre.max'   => $max,
            'apellidos.required' => $required,
            'apellidos.min'   => $min,
            'apellidos.max'   => $max,
            'fechaNac.required'   => $required,
            'fechaNac.date'   => $date,
            'email.required'   => $required,
            'email.min'   => $min,
            'email.max'   => $max,
            'telefono.numeric'   => $numeric,
            'telefono.digits'   => $telefono,
            'direccion.min'   => $min,
            'direccion.max'   => $max,
            'estadoCivil.min'   => $min,
            'estadoCivil.max'   => $max,
            'sueldo.gte'   => $gte,
            'sueldo.numeric'   => $numeric,
            ];
    }
    
    public function rules()
    {
        return [
            'nombre'        => 'required|min:2|max:50',
            'apellidos'     => 'required|min:2|max:100',
            'fechaNac'      => 'required|date',
            'clave'         => 'required|min:5|max:30',
            'email'         => 'required|min:2|max:100',
            'telefono'      => 'nullable|numeric|digits:9',
            'direccion'     => 'nullable|min:2|max:150',
            'estadoCivil'   => 'nullable|min:2|max:50',
            'sueldo'        => 'nullable|numeric',
            'ip'            => 'nullable',
        ];
    }
}

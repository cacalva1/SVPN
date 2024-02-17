<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Utilities\fun_valida_cedula;

/**
 * Class Policia
 *
 * @property $id
 * @property $cedula
 * @property $nombres
 * @property $apellidos
 * @property $fecha_nacimiento
 * @property $tipo_sangre
 * @property $ciudad_nacimiento
 * @property $celular
 * @property $rango
 * @property $id_dependencia
 * @property $rol
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Policia extends Model
{
	public static $customMessages = [
		'cedula.required' => 'El campo cédula es obligatorio.',
		'cedula.numeric' => 'El campo cédula solo debe tener números.',
		'cedula.digits' => 'El campo cédula solo debe tener 10 dígitos.',
		'nombres.required' => 'El campo nombres es obligatorio.',
		'apellidos.required' => 'El campo apellidos es obligatorio.',
		'fecha_nacimiento.required' => 'El campo fecha de nacimiento es obligatorio.',
		'tipo_sangre.required' => 'El campo tipo de sangre es obligatorio.',
		'ciudad_nacimiento.required' => 'El campo ciudad de nacimiento es obligatorio.',
		'celular.required' => 'El campo celular es obligatorio.',
		'celular.numeric' => 'El campo celular solo debe tener números.',
		'rango.required' => 'El campo rango es obligatorio.',
		'estado.required' => 'El campo estado es obligatorio.',
		'cedula.unique' => 'La cédula ya se encuentra registrada.',
	];
    public static function rules()
    {
        return [
            'cedula' => ['required','numeric','digits:10',new fun_valida_cedula,'unique:policias'],
            'nombres' => 'required',
            'apellidos' => 'required',
            'fecha_nacimiento' => 'required|date',
            'tipo_sangre' => 'required',
            'ciudad_nacimiento' => 'required',
            'celular' => ['required','numeric'],
            'rango' => 'required',
            'estado' => 'required',
        ];
    }
	protected $perPage = 20;

	/**
	 * Attributes that should be mass-assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['cedula', 'nombres', 'apellidos', 'fecha_nacimiento', 'tipo_sangre', 'ciudad_nacimiento', 'celular', 'rango', 'rol', 'estado'];


}

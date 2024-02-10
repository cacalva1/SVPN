<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
class Permiso extends Model
{
	protected $table = 'permissions';
	static $rules = [
		'name' => 'required',

	];
	protected $fillable = ['name'];




	/**
	 * Attributes that should be mass-assignable.
	 *
	 * @var array
	 */



}

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
class Policia extends Model
{
    
    static $rules = [
		'cedula' => 'required',
		'nombres' => 'required',
		'apellidos' => 'required',
		'fecha_nacimiento' => 'required',
		'tipo_sangre' => 'required',
		'ciudad_nacimiento' => 'required',
		'celular' => 'required',
		'rango' => 'required',
		'rol' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cedula','nombres','apellidos','fecha_nacimiento','tipo_sangre','ciudad_nacimiento','celular','rango','rol','estado'];



}

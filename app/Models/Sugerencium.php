<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sugerencium
 *
 * @property $id
 * @property $fecha_solicitud
 * @property $cod_circuito
 * @property $cod_subcircuito
 * @property $tipo
 * @property $detalle
 * @property $contacto
 * @property $apellidos
 * @property $nombres
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sugerencium extends Model
{
    
    static $rules = [
		'cod_circuito' => 'required',
		'cod_subcircuito' => 'required',
		'tipo' => 'required',
		'detalle' => 'required',
		'contacto' => 'required',
		'apellidos' => 'required',
		'nombres' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_solicitud','cod_circuito','cod_subcircuito','tipo','detalle','contacto','apellidos','nombres'];



}

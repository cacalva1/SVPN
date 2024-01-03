<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehiculo
 *
 * @property $id
 * @property $tipo_vehiculo
 * @property $placa
 * @property $chasis
 * @property $marca
 * @property $modelo
 * @property $motor
 * @property $kilometraje
 * @property $cilindraje
 * @property $capacidad_carga
 * @property $capacidad_pasajeros
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vehiculo extends Model
{
    
    static $rules = [
		'tipo_vehiculo' => 'required',
		'placa' => 'required',
		'cilindraje' => 'required',
		'capacidad_carga' => 'required',
		'capacidad_pasajeros' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo_vehiculo','placa','chasis','marca','modelo','motor','kilometraje','cilindraje','capacidad_carga','capacidad_pasajeros','estado'];



}

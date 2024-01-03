<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dependencia
 *
 * @property $id
 * @property $dependencia
 * @property $idProvincia
 * @property $idParroquia
 * @property $idDistrito
 * @property $idCircuito
 * @property $idSubcircuito
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Dependencia extends Model
{
    
    static $rules = [
		'dependencia' => 'required',
		'idProvincia' => 'required',
		'idParroquia' => 'required',
		'idDistrito' => 'required',
		'idCircuito' => 'required',
		'idSubcircuito' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['dependencia','idProvincia','idParroquia','idDistrito','idCircuito','idSubcircuito'];



}

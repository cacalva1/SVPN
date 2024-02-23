<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PersonalPertrecho
 *
 * @property $id
 * @property $fecha_asignacion
 * @property $policia_id
 * @property $pertrecho_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PersonalPertrecho extends Model
{
  protected $table = 'personal_pertrecho';
    static $rules = [
		'fecha_asignacion' => 'required',
		'policia_id' => 'required',
		'pertrecho_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_asignacion','policia_id','pertrecho_id'];



}

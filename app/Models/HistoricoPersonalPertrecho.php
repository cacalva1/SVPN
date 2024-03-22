<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HistoricoPersonalPertrecho
 *
 * @property $id
 * @property $fecha_accion
 * @property $policia_id
 * @property $pertrecho_id
 * @property $accion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class HistoricoPersonalPertrecho extends Model
{
  protected $table = 'historico_personal_pertrecho';
    static $rules = [
		'fecha_accion' => 'required',
		'policia_id' => 'required',
		'pertrecho_id' => 'required',
		'accion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_accion','policia_id','pertrecho_id','accion'];



}

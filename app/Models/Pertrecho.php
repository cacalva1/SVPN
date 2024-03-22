<?php

namespace App\Models;
use App\Utilities\fun_valida_tipoPetrecho;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pertrecho
 *
 * @property $id
 * @property $tipoArma
 * @property $Nombre
 * @property $descripcion
 * @property $codigo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pertrecho extends Model
{
  protected $table = 'pertrecho';
    static $rules = [
		'tipoArma' => 'required',
		'Nombre' => 'required',
		'descripcion' => 'required',
		'codigo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipoArma','Nombre','descripcion','codigo'];

    public static function rules()
    {
        return [
            'tipoArma' => [new fun_valida_tipoPetrecho]
        ];
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dependencia
 *
 * @property $id
 * @property $cod_circuito
 * @property $cod_distrito
 * @property $cod_subcircuito
 * @property $estado
 * @property $nombre_circuito
 * @property $nombre_distrito
 * @property $nombre_subcircuito
 * @property $num_circuitos
 * @property $num_distritos
 * @property $num_subcircuitos
 * @property $parroquia
 * @property $provincia
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Dependencia extends Model
{
    
    static $rules = [
		'cod_circuito' => 'required',
		'cod_distrito' => 'required',
		'cod_subcircuito' => 'required',
		'estado' => 'required',
		'nombre_circuito' => 'required',
		'nombre_distrito' => 'required',
		'nombre_subcircuito' => 'required',
		'num_circuitos' => 'required',
		'num_distritos' => 'required',
		'num_subcircuitos' => 'required',
		'parroquia' => 'required',
		'provincia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_circuito','cod_distrito','cod_subcircuito','estado','nombre_circuito','nombre_distrito','nombre_subcircuito','num_circuitos','num_distritos','num_subcircuitos','parroquia','provincia'];



}

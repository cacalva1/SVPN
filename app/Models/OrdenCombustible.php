<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrdenCombustible
 *
 * @property $id
 * @property $cantGalonesGasolina
 * @property $id_policia
 * @property $id_vehiculo
 * @property $kilometraje_actual
 * @property $nombre_gasolinera
 * @property $created_at
 * @property $updated_at
 *
 * @property Policia $policia
 * @property Vehiculo $vehiculo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class OrdenCombustible extends Model
{
    protected $table = 'ordenCombustible';

    
    static $rules = [
		'cantGalonesGasolina' => 'required',
		'id_policia' => 'required',
		'id_vehiculo' => 'required',
		'kilometraje_actual' => 'required',
		'nombre_gasolinera' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cantGalonesGasolina','id_policia','id_vehiculo','kilometraje_actual','nombre_gasolinera'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function policia()
    {
        return $this->hasOne('App\Models\Policia', 'id', 'id_policia');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function vehiculo()
    {
        return $this->hasOne('App\Models\Vehiculo', 'id', 'id_vehiculo');
    }
    

}

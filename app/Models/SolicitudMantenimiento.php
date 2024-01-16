<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
/**
 * Class SolicitudMantenimiento
 *
 * @property $id
 * @property $fecha_solicitud
 * @property $hora_solicitud
 * @property $Kilometraje_actual
 * @property $observaciones
 * @property $policia_id
 * @property $vehiculo_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SolicitudMantenimiento extends Model
{
    use HasFactory;
  protected $table = 'solicitud_mantenimiento';


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_solicitud','hora_solicitud','Kilometraje_actual','observaciones','policia_id','vehiculo_id'];



}

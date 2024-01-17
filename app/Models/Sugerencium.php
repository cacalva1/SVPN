<?php

namespace App\Models;

use Carbon\Carbon;
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
    'apellidos' => 'required',
    'nombres' => 'required',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['fecha_solicitud', 'cod_circuito', 'cod_subcircuito', 'tipo', 'detalle', 'contacto', 'apellidos', 'nombres'];


  // Accesor para obtener la fecha formateada
  public function getFechaHoraAttribute($value)
  {
    // Convierte el valor de la base de datos a un objeto Carbon
    $carbonDate = Carbon::parse($value);

    // Formatea la fecha según tus necesidades (por ejemplo, 'Y-m-d')
    return $carbonDate->format('Y-m-d');
  }

  // Mutador para guardar la fecha en el formato correcto
  public function setFechaHoraAttribute($value)
  {
    // Convierte el valor a un objeto Carbon y luego lo guarda en el formato de base de datos
    $this->attributes['fecha_solicitud'] = Carbon::createFromFormat('Y-m-d', $value);
  }

}

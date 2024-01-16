<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
/**
 * Class VehiculoSubcircuito
 *
 * @property $id
 * @property $fecha_asignacion
 * @property $policia_id
 * @property $dependencia_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class VehiculoSubcircuito extends Model
{
      use HasFactory;

    protected $table = 'vehiculo_subcircuito';
    protected $fillable = [
        'vehiculo_id',
        'dependencia_id'
    ];

    public function dependencia()
    {
        return $this->belongsTo(Dependencia::class, 'dependencia_id');
    }

}

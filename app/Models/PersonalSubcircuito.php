<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PersonalSubcircuito
 *
 * @property $id
 * @property $fecha_asignacion
 * @property $policia_id
 * @property $subcircuito_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PersonalSubcircuito extends Model
{
    
 /*   static $rules = [
		'fecha_asignacion' => 'required',
		'policia_id' => 'required',
		'subcircuito_id' => 'required',
    ];

    protected $perPage = 20;
*/
 /*   /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    /*protected $fillable = ['fecha_asignacion','policia_id','subcircuito_id'];

*/
     use HasFactory;
    protected $table = 'personal_subcircuitos';
    protected $fillable = [
        'fecha_asignacion',
        'policia_id',
        'dependencia_id',
    ];

    public function dependencia()
    {
        return $this->belongsTo(Dependencia::class, 'dependencia_id');
    }

}

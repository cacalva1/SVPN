<?php

namespace App\Models;
use App\Utilities\fun_valida_tipoPetrecho;
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
  

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_asignacion','policia_id','pertrecho_id'];


    public static function rules()
    {
        return [
            'tipoArma' => [new fun_valida_tipoPetrecho]
        ];
    }


}

<?php
namespace App\Utilities;
use Illuminate\Support\Facades\DB;

use Illuminate\Contracts\Validation\Rule;

class fun_valida_tipoPetrecho implements Rule
{
    public function passes($attribute, $tipo)
    {
        $resultado = DB::select('select * from mantenimiento.personal_pertrecho o, mantenimiento.pertrecho mp
        where mp.id = o.id
        and mp.tipoArma  = ?', [$tipo]);

        if (!empty($resultado)) {
            return false;
        } else {
           return true;
        }
    }
    public function message()
    {
        return 'Ya tiene asignado un pertrecho del mismo tipo. Revise';
    }
    
}
<?php
/**/ 
namespace App\Utilities;

use Illuminate\Contracts\Validation\Rule;

class fun_valida_cedula implements Rule
{
    public function passes($attribute, $cedula)
    {
        // Eliminar caracteres no numéricos
        $cedula = preg_replace('/[^0-9]/', '', $cedula);

        // Verificar la longitud de la cédula
        if (strlen($cedula) !== 10) {
            return false;
        }

        // Obtener los primeros 9 dígitos
        $digitos = substr($cedula, 0, 9);

        // Calcular el dígito verificador
        $digitoVerificador = substr($cedula, 9, 1);
        $suma = 0;

        for ($i = 0; $i < 9; $i++) {
            $digito = $digitos[$i];

            if ($i % 2 === 0) {
                $digito *= 2;

                if ($digito > 9) {
                    $digito -= 9;
                }
            }

            $suma += $digito;
        }

        $resto = $suma % 10;

        if ($resto === 0) {
            $verificadorCalculado = 0;
        } else {
            $verificadorCalculado = 10 - $resto;
        }

        // Comparar el dígito verificador calculado con el proporcionado
        return $verificadorCalculado == $digitoVerificador;
    }

    public function message()
    {
        return 'La cédula no es válida.';
    }
    
}

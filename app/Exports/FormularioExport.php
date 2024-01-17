<?php
namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class FormularioExport implements FromView
{
    public function view(): View
    {

        //  $sugerencia = Sugerencium::paginate();
        $data = [
            'nombre' => 'John Doe',
            'email' => 'john@example.com',
            // ... otros datos del formulario
        ];

        return view('sugerencium.index', $data);
    }
}
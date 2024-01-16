<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Policia;
use App\Models\PersonalSubcircuito;
use App\Models\Dependencia;
use Illuminate\Support\Facades\DB;
class PersonalSubcircuitoController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
//        if(auth()-> user()->rol !="Administrador" && auth()-> user()->rol !="Encargado"){

  //          return redirect('Inicio');

  //      }
        $policias = Policia::all();
        $dependencias = Dependencia::all();
        $policiasDependencias=  DB::select('select p.id, p.cedula, p.nombres, p.apellidos, p.cedula, p.estado, p.rango, p.rol,p.id_dependencia, policia_id ,d.nombre_subcircuito
from policias p  left join personal_subcircuitos on policia_id = p.id left join dependencias d
on d.id = dependencia_id');
        return view('personal-subcircuito.index', compact('policias', 'dependencias','policiasDependencias'));
    }

    public function edit($id)
    {
        $policia = Policia::findOrFail($id);
        $personalSubcircuito = PersonalSubcircuito::where('user_id', $policia->id)->first();
        $dependencias = Dependencia::all();
        
        return view('modulos.PersonalSubcircuito', compact('policias', 'personalSubcircuito', 'dependencias'));
    }

    public function update(Request $request, $id)
    {
        $policia = Policia::findOrFail($id);
        $dependencia_id = $request->input('dependencia');
        
        // Actualizar el campo dependencia_id en la tabla users
        $policia->id_dependencia = $dependencia_id;
        $policia->save();

        // Verificar si ya existe una asignación en la tabla personal_subcircuito para el policía
        $personalSubcircuito = PersonalSubcircuito::where('policia_id', $policia->id)->first();
        
        if ($personalSubcircuito) {
            // Actualizar la dependencia existente
           $personalSubcircuito->dependencia_id = $dependencia_id;
            $personalSubcircuito->save();
        } else {
            // Crear una nueva asignación en la tabla personal_subcircuito
            $personalSubcircuito = new PersonalSubcircuito();
            $personalSubcircuito->policia_id = $policia->id; // Corregir el nombre del atributo
            $personalSubcircuito->dependencia_id = $dependencia_id;
            $personalSubcircuito->save();
        }
    
         //return redirect()->route('PersonalSubcircuito');
       //return redirect()->route('PersonalSubcircuito')->with('success', 'La dependencia del policía se ha actualizado correctamente.');
        return redirect('PersonalSubcircuito')->with('asignadoDep', 'Si');
    }
}

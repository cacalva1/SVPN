<?php

namespace App\Http\Controllers;

use App\Models\VehiculoSubcircuito;
use Illuminate\Http\Request;
use App\Models\Vehiculo;
use App\Models\Dependencia;
use Illuminate\Support\Facades\DB;
/**
 * Class VehiculoSubcircuitoController
 * @package App\Http\Controllers
 */
class VehiculoSubcircuitoController extends Controller
{ public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
       /* if(auth()-> user()->rol !="Administrador" && auth()-> user()->rol !="Encargado"){

            return redirect('Inicio');

        }*/
        $vehiculos = Vehiculo::all();
        $dependencias = Dependencia::all();
        $VehiculoDependencia=  DB::select('select p.id,p.estado,  s.dependencia_id, p.tipo_vehiculo,p.placa,p.chasis,p.marca,p.modelo,p.motor,p.kilometraje, vehiculo_id ,d.nombre_subcircuito
from vehiculos p  left join vehiculo_subcircuito s on vehiculo_id = p.id left join dependencias d
on d.id = dependencia_id');

        return view('vehiculo-subcircuito.index', compact('vehiculos', 'dependencias','VehiculoDependencia'));
    }

    public function edit($id)
    {
        $vehiculo = Vehiculo::findOrFail($id);
        $vehiculoSubcircuito = VehiculoSubcircuito::where('user_id', $vehiculo->id)->first();
        $dependencias = Dependencia::all();

        return view('vehiculo-subcircuito.index', compact('vehiculo','vehiculoSubcircuito' ,'dependencias'));
    }

    public function update(Request $request, $id)
    {
        $vehiculo = Vehiculo::findOrFail($id);
        $dependencia_id = $request->input('dependencia');

        // Actualizar el campo dependencia_id en la tabla vehiculos
       // $vehiculo->id_dependencia = $dependencia_id;
        //$vehiculo->save();
       // Verificar si ya existe una asignación en la tabla vehiculo_subcircuito para el vehículo
        $vehiculoSubcircuito = VehiculoSubcircuito::where('vehiculo_id', $vehiculo->id)->first();

        if ($vehiculoSubcircuito) {
            // Actualizar la dependencia existente
            $vehiculoSubcircuito->dependencia_id = $dependencia_id;
            $vehiculoSubcircuito->save();
        } else {
            // Crear una nueva asignación en la tabla vehiculo_subcircuito
            $vehiculoSubcircuito = new VehiculoSubcircuito();
            $vehiculoSubcircuito->vehiculo_id = $vehiculo->id;
            $vehiculoSubcircuito->dependencia_id = $dependencia_id;
            $vehiculoSubcircuito->save();
        }

        return redirect('VehiculoSubcircuito')->with('asignadoVeh', 'Si');
    }
}

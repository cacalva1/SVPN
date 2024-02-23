<?php

namespace App\Http\Controllers;

use App\Models\SolicitudMantenimiento;
use Illuminate\Http\Request;
use App\Models\Policia;
use App\Models\Vehiculo;
use Illuminate\Support\Facades\DB;

/**
 * Class SolicitudMantenimientoController
 * @package App\Http\Controllers
 */
class SolicitudMantenimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $id = auth()->user()->persona_id;
        $policia = Policia::findOrFail($id);
        $vehiculo = DB::selectOne('select vv.* from mantenimiento.personal_subcircuitos s, mantenimiento.policias p, mantenimiento.vehiculo_subcircuito v,
        mantenimiento.vehiculos vv 
        where p.id = s.policia_id
        and  s.dependencia_id  = v.dependencia_id
        and vv.id = v.vehiculo_id  and s.policia_id =? ', [$id]); //Vehiculo::findOrFail($id);
        if (!$vehiculo) {
            // Manejar el caso en que el vehículo es nulo
            return response()->json(['error' => 'El usuario no esta atado a ninguna dependencia o no hay un vehiculo disponible. Por favor contactarse con el administrador.'], 404);
        }
        $solicitudMantenimientos = DB::select('select * from solicitud_mantenimiento where policia_id =? ', [$id]);
        return view('solicitud-mantenimiento.index', compact('policia', 'vehiculo', 'solicitudMantenimientos'));


        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $solicitudMantenimiento = new SolicitudMantenimiento();
        return view('solicitud-mantenimiento.create', compact('solicitudMantenimiento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SolicitudMantenimiento $solicitudMantenimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_vehiculo, $id_policia)
    {
        $vehiculo = Vehiculo::findOrFail($id_vehiculo);
        $solicitud_id = $request->input('solicitudMantenimiento');
        // Verificar si ya existe una asignación en la tabla vehiculo_subcircuito para el vehículo
        // Crear una nueva asignación en la tabla vehiculo_subcircuito
        $solicitudMantenimiento = new SolicitudMantenimiento();
        $solicitudMantenimiento->vehiculo_id = $id_vehiculo;
        $solicitudMantenimiento->policia_id = $id_policia;
        $solicitudMantenimiento->Kilometraje_actual = $request->input('kilometraje');
        $solicitudMantenimiento->observaciones = $request->input('observaciones');
        $solicitudMantenimiento->fecha_solicitud = $request->input('fechamantenimiento');
        $solicitudMantenimiento->hora_solicitud = $request->input('horamantenimiento');
        $solicitudMantenimiento->save();
        return redirect('SolicitudMantenimiento') ->with('success', 'Solicitud creada correctamente.');

        //return redirect('SolicitudMantenimiento',['policia_id' =>$id_policia])->with('message',"Datos Guardados correctamente");
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $solicitudMantenimiento = SolicitudMantenimiento::find($id);

        return redirect('SolicitudMantenimiento/1')->with('success', 'Policia deleted successfully');
    }
}

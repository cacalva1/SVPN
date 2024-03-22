<?php

namespace App\Http\Controllers;

use App\Models\OrdenCombustible;
use Illuminate\Http\Request;
use App\Models\Policia;
use App\Models\Vehiculo;
use Illuminate\Support\Facades\DB;
/**
 * Class OrdenCombustibleController
 * @package App\Http\Controllers
 */
class OrdenCombustibleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('auth');
    }   
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
        $solicitudMantenimientos = DB::select(' select * from mantenimiento.ordenCombustible where id_policia  =? ', [$id]);
        return view('orden-combustible.index', compact('policia', 'vehiculo', 'solicitudMantenimientos'));


        
    }

    public function ordenes()
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
        $ordenCombustibles  = DB::select('select o.id id_orden  , o.cantGalonesGasolina, o.nombre_gasolinera,o.fecha, 
        o.kilometraje_actual, p.nombres,p.apellidos, v.placa, v.modelo, v.marca
         from mantenimiento.ordencombustible o, mantenimiento.policias p, mantenimiento.vehiculos v 
        where o.id_policia = p.id and o.id_vehiculo = v.id');
        return view('orden-combustible.ordenes', compact('policia', 'vehiculo', 'ordenCombustibles'));


        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ordenCombustible = new OrdenCombustible();
        return view('orden-combustible.create', compact('ordenCombustible'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(OrdenCombustible::$rules);

        $ordenCombustible = OrdenCombustible::create($request->all());

        return redirect()->route('orden-combustibles.index')
            ->with('success', 'OrdenCombustible created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ordenCombustible = OrdenCombustible::find($id);

        return view('orden-combustible.show', compact('ordenCombustible'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ordenCombustible = OrdenCombustible::find($id);

        return view('orden-combustible.edit', compact('ordenCombustible'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  OrdenCombustible $ordenCombustible
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_vehiculo, $id_policia)
    {
        $vehiculo = Vehiculo::findOrFail($id_vehiculo);
        $solicitud_id = $request->input('solicitudMantenimiento');
        // Verificar si ya existe una asignación en la tabla vehiculo_subcircuito para el vehículo
        // Crear una nueva asignación en la tabla vehiculo_subcircuito
        $solicitud = new OrdenCombustible();
        $solicitud->id_vehiculo = $id_vehiculo;
        $solicitud->id_policia = $id_policia;
        $solicitud->estado = "Activo";
        $solicitud->cantGalonesGasolina = $request->input('cantGalonesCombustible');
        $solicitud->Kilometraje_actual = $request->input('kilometraje');
        $solicitud->nombre_gasolinera = $request->input('nombreGasolinera');
        $solicitud->fecha = $request->input('fechamantenimiento');
        $solicitud->hora = $request->input('horamantenimiento');
        $solicitud->save();
        return redirect('OrdenCombustible') ->with('success', 'Solicitud creada correctamente.');

        //return redirect('SolicitudMantenimiento',['policia_id' =>$id_policia])->with('message',"Datos Guardados correctamente");
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ordenCombustible = OrdenCombustible::find($id)->delete();

        return redirect('OrdenCombustible')
            ->with('success', 'Orden eliminada correctamente');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Sugerencium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\FormularioExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Dependencia;
use PDF;

/**
 * Class SugerenciumController
 * @package App\Http\Controllers
 */
class SugerenciumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function generatePDF()
    {
        $data = DB::select('select count(*) contador,s.tipo, dep.nombre_circuito, dep.nombre_subcircuito 
    from sugerencia s , dependencias dep where s.cod_circuito = dep.cod_circuito
    and s.cod_subcircuito = dep.cod_subcircuito 
         group by nombre_circuito,tipo, nombre_subcircuito');

        $pdf = PDF::loadView('sugerencium.reporte', compact('data'));

        return $pdf->download('informe.pdf');
    }

    public function index(Request $request)
    {

        $v_ini = $request->input('fecha_ini');
        $v_fin = $request->input('fecha_fin');
        //  $sugerencia = Sugerencium::paginate();
        $sugerencia = DB::select('
    select ? as fecha_in  ,  ?  as fecha_sal,count(*) contador,s.tipo, dep.nombre_circuito, dep.nombre_subcircuito 
    from sugerencia s , dependencias dep where s.cod_circuito = dep.cod_circuito
    and s.cod_subcircuito = dep.cod_subcircuito and s.fecha_solicitud between ? and ?
         group by nombre_circuito,tipo, nombre_subcircuito', [$v_ini, $v_fin, $v_ini, $v_fin]);
        return view('sugerencium.index', compact('sugerencia', 'v_ini', 'v_fin'));
    }

    public function reportes(Request $request)
    {
        $v_ini = $request->input('fecha_ini');
        $v_fin = $request->input('fecha_fin');
        //  $sugerencia = Sugerencium::paginate();
        $sugerencia = DB::select('
    select ? as fecha_in  ,  ?  as fecha_sal,count(*) contador,s.tipo, dep.nombre_circuito, dep.nombre_subcircuito 
    from sugerencia s , dependencias dep where s.cod_circuito = dep.cod_circuito
    and s.cod_subcircuito = dep.cod_subcircuito and s.fecha_solicitud between ?   and ?
         group by nombre_circuito,tipo, nombre_subcircuito', [$v_ini, $v_fin, $v_ini, $v_fin]);
        return view('sugerencium.index', compact('sugerencia', 'v_ini', 'v_fin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cod_cir = $request->input('cod_circuito');
        $sugerencium = new Sugerencium();
        $circuitos = DB::select('select distinct cod_circuito, nombre_circuito from dependencias');
        $subcircuitos = DB::select('select distinct cod_subcircuito, nombre_subcircuito from dependencias where cod_circuito = ?', [$cod_cir]);

        return view('sugerencium.create', compact('sugerencium', 'circuitos', 'subcircuitos'));
    }

    public function getSubcircuitos($id_circuito)
    {
        $subcircuitos = DB::select('select distinct cod_subcircuito, nombre_subcircuito from dependencias where cod_circuito = ?', [$id_circuito]);

        return response()->json($subcircuitos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Sugerencium::$rules);

        $sugerencium = Sugerencium::create($request->all());

        return redirect()->route('login')
            ->with('mensaje', 'Sugerencia creada correctamente.');
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
        $sugerencium = Sugerencium::find($id);

        return view('sugerencium.edit', compact('sugerencium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Sugerencium $sugerencium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sugerencium $sugerencium)
    {
        request()->validate(Sugerencium::$rules);

        $sugerencium->update($request->all());

        return redirect()->route('sugerencia.index')
            ->with('success', 'Sugerencium updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $sugerencium = Sugerencium::find($id)->delete();

        return redirect()->route('sugerencia.index')
            ->with('success', 'Sugerencium deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\PersonalPertrecho;
use Illuminate\Http\Request;
use App\Models\Policia;
use App\Models\Dependencia;
use App\Models\Pertrecho;
use Illuminate\Support\Facades\DB;

/**
 * Class PersonalPertrechoController
 * @package App\Http\Controllers
 */
class PersonalPertrechoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $policias = Policia::all();
        $pertrechos = Pertrecho::all();
        $personalPertrechos =  DB::select('select p.id as id2, p.cedula, p.nombres, p.apellidos, p.cedula,pertrecho_id, p.estado, p.rango, p.rol,d.id,p.id_dependencia,d.Nombre,d.descripcion, policia_id ,d.nombre,d.codigo, d.tipoArma
        from policias p  left join personal_pertrecho on policia_id = p.id left join pertrecho d
        on d.id = pertrecho_id');
        return view('personal-pertrecho.index', compact('policias', 'pertrechos', 'personalPertrechos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personalPertrecho = new PersonalPertrecho();
        return view('personal-pertrecho.create', compact('personalPertrecho'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PersonalPertrecho::$rules);

        $personalPertrecho = PersonalPertrecho::create($request->all());

        return redirect()->route('personal-pertrechos.index')
            ->with('success', 'PersonalPertrecho created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personalPertrecho = PersonalPertrecho::find($id);

        return view('personal-pertrecho.show', compact('personalPertrecho'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dump($id);
        $policia = Policia::findOrFail($id);
        $personalPertrechos = PersonalPertrecho::where('personal_id', $policia->id)->first();
        $pertrechos = Pertrecho::all();

        return view('personal-pertrecho.index', compact('policias', 'personalPertrechos', 'pertrechos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PersonalPertrecho $personalPertrecho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pertrecho = Pertrecho::findOrFail($id);
        $pertrecho_id = $request->input('pertrecho');

        $personalPertrecho = PersonalPertrecho::where('policia_id', $pertrecho->id)->first();

        if ($personalPertrecho) {
            // Actualizar la dependencia existente
            $personalPertrecho->pertrecho_id = $pertrecho_id;
            $personalPertrecho->save();
        } else {
            // Crear una nueva asignación en la tabla vehiculo_subcircuito
            $personalPertrecho = new PersonalPertrecho();
            $personalPertrecho->policia_id = $pertrecho->id;
            $personalPertrecho->pertrecho_id = $pertrecho_id;
            $personalPertrecho->save();
        }

        return redirect('VehiculoSubcircuito')->with('success', 'Asignacion correcta');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $personalPertrecho = PersonalPertrecho::find($id)->delete();

        return redirect()->route('personal-pertrechos.index')
            ->with('success', 'PersonalPertrecho deleted successfully');
    }
}

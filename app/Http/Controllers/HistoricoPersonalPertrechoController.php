<?php

namespace App\Http\Controllers;

use App\Models\HistoricoPersonalPertrecho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/**
 * Class HistoricoPersonalPertrechoController
 * @package App\Http\Controllers
 */
class HistoricoPersonalPertrechoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $historicoPersonalPertrechos=  DB::select('
        select * from mantenimiento.policias p , mantenimiento.historico_personal_pertrecho d , mantenimiento.pertrecho a 
        where p.id = d.policia_id and d.pertrecho_id = a.id');
        return view('historico-personal-pertrecho.index', compact('historicoPersonalPertrechos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $historicoPersonalPertrecho = new HistoricoPersonalPertrecho();
        return view('historico-personal-pertrecho.create', compact('historicoPersonalPertrecho'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(HistoricoPersonalPertrecho::$rules);

        $historicoPersonalPertrecho = HistoricoPersonalPertrecho::create($request->all());

        return redirect()->route('historico-personal-pertrechos.index')
            ->with('success', 'HistoricoPersonalPertrecho created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $historicoPersonalPertrecho = HistoricoPersonalPertrecho::find($id);

        return view('historico-personal-pertrecho.show', compact('historicoPersonalPertrecho'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $historicoPersonalPertrecho = HistoricoPersonalPertrecho::find($id);

        return view('historico-personal-pertrecho.edit', compact('historicoPersonalPertrecho'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  HistoricoPersonalPertrecho $historicoPersonalPertrecho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HistoricoPersonalPertrecho $historicoPersonalPertrecho)
    {
        request()->validate(HistoricoPersonalPertrecho::$rules);

        $historicoPersonalPertrecho->update($request->all());

        return redirect()->route('historico-personal-pertrechos.index')
            ->with('success', 'HistoricoPersonalPertrecho updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $historicoPersonalPertrecho = HistoricoPersonalPertrecho::find($id)->delete();

        return redirect()->route('historico-personal-pertrechos.index')
            ->with('success', 'HistoricoPersonalPertrecho deleted successfully');
    }
}

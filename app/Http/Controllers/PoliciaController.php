<?php

namespace App\Http\Controllers;

use App\Models\Policia;
use Illuminate\Http\Request;

/**
 * Class PoliciaController
 * @package App\Http\Controllers
 */
class PoliciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $policias = Policia::paginate();

        return view('policia.index', compact('policias'))
            ->with('i', (request()->input('page', 1) - 1) * $policias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $policia = new Policia();
        return view('policia.create', compact('policia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Policia::$rules);

        $policia = Policia::create($request->all());

        return redirect()->route('policias.index')
            ->with('success', 'Policia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $policia = Policia::find($id);

        return view('policia.show', compact('policia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $policia = Policia::find($id);

        return view('policia.edit', compact('policia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Policia $policia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Policia $policia)
    {
        request()->validate(Policia::$rules);

        $policia->update($request->all());

        return redirect()->route('policias.index')
            ->with('success', 'Policia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $policia = Policia::find($id)->delete();

        return redirect()->route('policias.index')
            ->with('success', 'Policia deleted successfully');
    }
}

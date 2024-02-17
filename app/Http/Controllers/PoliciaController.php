<?php

namespace App\Http\Controllers;

use App\Utilities\fun_valida_cedula;
use App\Models\Policia;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

        $request->validate(Policia::rules(), Policia::$customMessages);

        $policia = Policia::create($request->all());
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'persona_id' => $policia->id,
        ]);

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
        $user = DB::selectOne('select * from mantenimiento.users u , mantenimiento.policias p
where u.persona_id = p.id  and u.persona_id = ? ', [$id]);

        return view('policia.edit', compact('policia', 'user'));
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
        $validatedData = $request->validate([
            'cedula' => ['required', new fun_valida_cedula],
            'nombres' => 'required',
            'apellidos' => 'required',
            'fecha_nacimiento' => 'required',
            'tipo_sangre' => 'required',
            'ciudad_nacimiento' => 'required',
            'celular' => 'required',
            'rango' => 'required',
            'rol' => 'required',
            'estado' => 'required',
        ]);
        $policia->update($request->all());
        $user = User::where('persona_id', $policia->id)->first();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        /*Solo actualiza si tiene valor*/
        if ($request->input('password') !== null) {
            $user->password = Hash::make($request['password']);
        }

        $user->save();


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

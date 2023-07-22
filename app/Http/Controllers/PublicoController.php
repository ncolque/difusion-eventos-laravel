<?php

namespace App\Http\Controllers;

use App\Models\Publico;
use App\Http\Requests\StorePublicoRequest;
use App\Http\Requests\UpdatePublicoRequest;
use App\Models\Evento;

class PublicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Publico::all();
        return view('publico.index', compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eventos = Evento::where('estado', 'Habilitado')->get();
        $reg = new Publico();
        return view('publico.form', compact('eventos', 'reg'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePublicoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePublicoRequest $request)
    {
        $registros = Publico::create($request->all());
        if (auth()->user()) {
            return redirect()->route('publicos.index');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publico  $publico
     * @return \Illuminate\Http\Response
     */
    public function show(Publico $publico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publico  $publico
     * @return \Illuminate\Http\Response
     */
    public function edit(Publico $publico)
    {
        $eventos = Evento::where('estado', 'Habilitado')->get();
        $reg = $publico;
        return view('publico.form', compact('eventos', 'reg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePublicoRequest  $request
     * @param  \App\Models\Publico  $publico
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePublicoRequest $request, Publico $publico)
    {
        $publico->update($request->all());
        return redirect()->route('publicos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publico  $publico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publico $publico)
    {
        $publico->delete();
        return redirect()->route('publicos.index');
    }
}

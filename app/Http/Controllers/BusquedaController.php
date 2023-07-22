<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Evento;
use App\Models\Mensaje;
use App\Models\Publico;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;

class BusquedaController extends Controller
{
    public function buscarGeneral(Request $request)
    {
        $valor = $request->input('texto');

        $searchResults = (new Search())
            ->registerModel(User::class, 'name')
            ->registerModel(Cliente::class, 'nombre')
            ->registerModel(Evento::class, 'nombre')
            ->registerModel(Mensaje::class, 'asunto')
            ->registerModel(Publico::class, 'nombre')
            ->search($valor);

        return view('busqueda', compact('searchResults'));
    }
}

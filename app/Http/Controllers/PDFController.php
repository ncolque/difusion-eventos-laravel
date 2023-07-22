<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Evento;
use App\Models\Pagina;
use App\Models\Publico;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PDFController extends Controller
{
    public function visitasPDF()
    {
        $visitas = Pagina::all();
        $pdf = \PDF::loadView('reportes.visitas', [
            'visitas' => $visitas,
        ]);
        return $pdf->download('visitas.pdf');
    }

    public function usuariosPDF()
    {
        /* $usuarios = User::where('tipo', 2)->get(); */
        $usuarios = User::all();
        $pdf = \PDF::loadView('reportes.usuarios', [
            'usuarios' => $usuarios,
        ]);
        return $pdf->download('usuarios.pdf');
    }

    public function estadisticas()
    {
        $cantEventosDes = Evento::where('estado', 'Desabilitado')->count();
        $cantEventosHab = Evento::where('estado', 'Habilitado')->count();
        $cantPublico = Publico::count();
        $eventos = Evento::all();
        $clientes = User::where('tipo', 2)->count();
        $admins = User::where('tipo', 1)->count();

        $paginaMenor = Pagina::orderBy("visitas", 'asc')->first();
        $paginaMayor = Pagina::orderBy("visitas", 'desc')->first();
        $paginaTotal = Pagina::sum('visitas');
        
        return view('reportes.estadisticas', compact('cantEventosDes', 'cantEventosHab', 'cantPublico', 'eventos', 'clientes', 'admins'));
    }
}

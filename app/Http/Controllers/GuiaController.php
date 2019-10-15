<?php

namespace App\Http\Controllers;

use App\Usuariolaboratorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuiaController extends Controller
{
    public function store(Request $request)
    {
        $usuariolaboratorios = DB::table('usuariolaboratorio')
            -> select('usuariolaboratorio.*')
            -> where('usuariolaboratorio.Guia', '=', $request->get('Guia'))
            ->get();
        return  view('Guia')->with('usuariolaboratorios',$usuariolaboratorios);
    }

    public function index()
    {
        $usuariolaboratorios = DB::table('usuariolaboratorio')
            -> select('usuariolaboratorio.*')
            -> where('usuariolaboratorio.Guia', '=', 'pp')
            ->get();
        return  view('Guia')->with('usuariolaboratorios',$usuariolaboratorios);
    }
}

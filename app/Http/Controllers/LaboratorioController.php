<?php

namespace App\Http\Controllers;

use App\Laboratorio;
use App\Usuario;
use Illuminate\Http\Request;

class LaboratorioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laboratorios = Laboratorio::all();
        return view('Laboratorio', compact('laboratorios'));
    }
}

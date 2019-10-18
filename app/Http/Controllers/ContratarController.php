<?php

namespace App\Http\Controllers;
use App\Laboratorio;
use App\LaboratorioAnalisis;
use App\Analisis;
use App\Usuariolaboratorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ContratarController extends Controller
{
    public function index(request $request)
    {
        $laboratorioanalisis = DB::table('laboratorioanalisis')
            -> join('laboratorio','laboratorioanalisis.LabCodigo','=','laboratorio.LabCodigo')
            -> join('analisis','laboratorioanalisis.AnaCodigo','=','analisis.AnaCodigo')
            -> select('laboratorioanalisis.*','laboratorio.*','analisis.*')
            -> where('laboratorioanalisis.AnaCodigo', '=', $request->get('AnaCodigo'))
            ->get();

        $analisis = Analisis::all();

        return  view('Contratar')
            ->with('laboratorioanalisis',$laboratorioanalisis)
            ->with('analisis',$analisis);
    }

    public function solicitar(request $request){
        $usuariolaboratorio = new Usuariolaboratorio(array(
            'UsuCodigo' => auth()->user()->UsuCodigo,
            'LabCodigo' => $request->get('LabCodigo'),
            'AnaCodigo' => $request->get('AnaCodigo'),
            'Estado' => 1,
            'FechaRecogida' => $request->get('FechaRecogida'),
            'Guia' => '',
            'MetodoPago' => $request->get('MetodoPago'),
            'Aprobado' => 'NO'
        ));
    }

}

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

    public function __construct()
    {
        $this->middleware('auth:usuario');
    }

    public function index(request $request)
    {
        $laboratorioanalisis = DB::table('laboratorioanalisis')
            -> join('laboratorio','laboratorioanalisis.LabCodigo','=','laboratorio.LabCodigo')
            -> join('analisis','laboratorioanalisis.AnaCodigo','=','analisis.AnaCodigo')
            -> select('laboratorioanalisis.*','laboratorio.*','analisis.*')
            -> where('laboratorioanalisis.AnaCodigo', '=', $request->get('AnaCodigo'))
            ->get();

        $analisis = Analisis::all();

        return  view('contratar')
            ->with('laboratorioanalisis',$laboratorioanalisis)
            ->with('analisis',$analisis);
    }



    public function crear(request $request)
    {
        $usuariolaboratorio = new usuariolaboratorio(array(
            'UsuCodigo' => auth()->user()->UsuCodigo,
            'LabCodigo' => $request->get('LabCodigo'),
            'AnaCodigo' => $request->get('AnaCodigo2'),
            'Estado' => 1,
            'FechaRecogida' => $request->get('FechaRecogida') ,
            'Guia' => auth()->user()->UsuCodigo.$request->get('LabCodigo').$request->get('AnaCodigo2').date("d").date("m").date("Y"),
            'MetodoPago' => $request->get('MetodoPago')
        ));

        $usuariolaboratorio->save();
        return redirect('gestionusuario');
    }

}

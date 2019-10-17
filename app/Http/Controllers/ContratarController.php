<?php

namespace App\Http\Controllers;
use App\LaboratorioAnalisis;
use App\Analisis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContratarController extends Controller
{
    public function index(request $request)
    {
        $laboratorioanalisis = DB::table('laboratorioanalisis')
            -> join('laboratorio','laboratorioanalisis.LabCodigo','=','laboratorio.LabCodigo')
            -> select('laboratorioanalisis.*','laboratorio.*')
            -> where('laboratorioanalisis.AnaCodigo', '=', $request->get('AnaCodigo'))
            ->get();

        $analisis = Analisis::all();

        return  view('Contratar')
            ->with('laboratorioanalisis',$laboratorioanalisis)
            ->with('analisis',$analisis);
    }

}

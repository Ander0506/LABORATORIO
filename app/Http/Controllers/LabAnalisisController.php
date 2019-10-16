<?php


namespace App\Http\Controllers;


use App\Laboratorio;
use App\laboratorioanalisis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LabAnalisisController extends Controller
{
    public function index($id)
    {
        //$usuariolaboratorios  = Usuariolaboratorio::all();

        $laboratorioanalisis = DB::table('laboratorioanalisis')
            -> join('analisis','laboratorioanalisis.AnaCodigo','=','analisis.AnaCodigo')
            -> select('laboratorioanalisis.*','analisis.AnaDescripcion')
            -> where('laboratorioanalisis.LabCodigo', '=', $id)
            -> where('laboratorioanalisis.AnaLabAprobado', '=', 'SI')
            ->get();

        $laboratorios = Laboratorio::all();

        return  view('labanalisis')
            ->with('laboratorioanalisis',$laboratorioanalisis)
            ->with('id',$id)
            ->with(compact('laboratorios'));
    }

}

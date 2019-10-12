<?php


namespace App\Http\Controllers;


use App\Usuariolaboratorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GestionUsuarioController extends Controller
{
    public function index()
    {
        //$usuariolaboratorios  = Usuariolaboratorio::all();

        $usuariolaboratorios = DB::table('usuariolaboratorio')
            -> join('laboratorio','usuariolaboratorio.LabCodigo','=','laboratorio.LabCodigo')
            -> join('analisis','usuariolaboratorio.AnaCodigo','=','analisis.AnaCodigo')
            -> select('usuariolaboratorio.*','laboratorio.LabNombre','analisis.AnaDescripcion')
            -> where('usuariolaboratorio.UsuCodigo', '=', 1)
            ->get();
        return  view('gestionusuario')->with('usuariolaboratorios',$usuariolaboratorios);
    }



}

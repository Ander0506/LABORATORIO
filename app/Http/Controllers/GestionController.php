<?php


namespace App\Http\Controllers;


use App\Usuariolaboratorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GestionController extends Controller
{
    public function index()
    {
        //$usuariolaboratorios  = Usuariolaboratorio::all();

        $usuariolaboratorios = DB::table('usuariolaboratorio')
            -> join('usuario','usuariolaboratorio.UsuCodigo','=','usuario.UsuCodigo')
            -> join('analisis','usuariolaboratorio.AnaCodigo','=','analisis.AnaCodigo')
            -> select('usuariolaboratorio.*','usuario.UsuNombre','analisis.AnaDescripcion')
            -> where('usuariolaboratorio.LabCodigo', '=', 1)
            ->get();
        return  view('Gestion')->with('usuariolaboratorios',$usuariolaboratorios);
    }

}

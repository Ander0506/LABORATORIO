<?php


namespace App\Http\Controllers;


use App\Usuariolaboratorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GestionController extends Controller
{
    public function index($id)
    {
        //$usuariolaboratorios  = Usuariolaboratorio::all();

        $usuariolaboratorios = DB::table('usuariolaboratorio')
            -> join('usuario','usuariolaboratorio.UsuCodigo','=','usuario.UsuCodigo')
            -> join('analisis','usuariolaboratorio.AnaCodigo','=','analisis.AnaCodigo')
            -> select('usuariolaboratorio.*','usuario.UsuNombre','analisis.AnaDescripcion')
            -> where('usuariolaboratorio.LabCodigo', '=', $id)
            ->get();
        return  view('Gestion')->with('usuariolaboratorios',$usuariolaboratorios);
    }

    public function update($key,request $request){
        DB::table('usuarioLaboratorio')
            ->where('UsuLabKey', $key)
            ->update(['Estado' => $request->get('Estado')]);
        DB::table('usuarioLaboratorio')
            ->where('UsuLabKey', $key)
            ->update(['Resultado' => $request->get('Resultado')]);
            return $this->index();

    }

}

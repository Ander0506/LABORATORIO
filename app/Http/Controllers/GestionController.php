<?php


namespace App\Http\Controllers;


use App\Usuariolaboratorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GestionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:laboratorio');
    }

    public function index()
    {

        //$usuariolaboratorios  = Usuariolaboratorio::all();

        $usuariolaboratorios = DB::table('usuariolaboratorio')
            -> join('usuario','usuariolaboratorio.UsuCodigo','=','usuario.UsuCodigo')
            -> join('analisis','usuariolaboratorio.AnaCodigo','=','analisis.AnaCodigo')
            -> select('usuariolaboratorio.*','usuario.UsuNombre','analisis.AnaDescripcion')
            -> where('usuariolaboratorio.LabCodigo', '=', auth()->user()->LabCodigo)
            ->get();
        return  view('Gestion')
            ->with('usuariolaboratorios',$usuariolaboratorios);
    }

    public function update($key,request $request){
        DB::table('usuarioLaboratorio')
            ->where('UsuLabKey', $key)
            ->update(['Estado' => $request->get('Estado')]);
        DB::table('usuarioLaboratorio')
            ->where('UsuLabKey', $key)

            ->update(['Resultado' => request()->Resultado->storeAs('uploads/file', request()->Resultado->getClientOriginalName())]);
            return redirect('gestion');

    }

}

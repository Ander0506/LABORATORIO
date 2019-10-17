<?php


namespace App\Http\Controllers;

use App\Analisis;
use App\laboratorioanalisis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LabAnalisisController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:laboratorio');
    }
    public function index()
    {
        //$usuariolaboratorios  = Usuariolaboratorio::all();

        $laboratorioanalisis = DB::table('laboratorioanalisis')
            -> join('analisis','laboratorioanalisis.AnaCodigo','=','analisis.AnaCodigo')
            -> select('laboratorioanalisis.*','analisis.AnaDescripcion')
            -> where('laboratorioanalisis.LabCodigo', '=', auth()->user()->LabCodigo)
            -> where('laboratorioanalisis.AnaLabAprobado', '=', 'SI')
            ->get();

        $analisis = Analisis::all();

        return  view('labanalisis')
            ->with('laboratorioanalisis',$laboratorioanalisis)
            ->with('analisis',$analisis);
    }

    public function insert(Request $request){
        $laboratorioAnalisi = new LaboratorioAnalisis(array(
            'LabCodigo' => $request->get(auth()->user()->LabCodigo),
            'AnaCodigo' => $request->get('AnaCodigo'),
            'AnaLabPrecio' => $request->get('AnaLabPrecio'),
            'AnaLabAprobado' => ('NO'),
            'AnaLabDisponible' => $request->get('AnaLabDisponible')
        ));
        $laboratorioAnalisi->save();
        return redirect('labanalisis');
    }

}

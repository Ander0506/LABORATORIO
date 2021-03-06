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
            //-> where('laboratorioanalisis.AnaLabAprobado', '=', 'SI')
            ->get();

        $analisis = Analisis::all();

        return  view('labanalisis')
            ->with('laboratorioanalisis',$laboratorioanalisis)
            ->with('analisis',$analisis);
    }

    public function insert(Request $request){
        $laboratorioAnalisi = new LaboratorioAnalisis(array(
            'LabCodigo' => (auth()->user()->LabCodigo),
            'AnaCodigo' => $request->get('AnaCodigo'),
            'AnaLabPrecio' => $request->get('AnaLabPrecio'),
            'AnaLabTiempo' => $request->get('AnaLabTiempo'),
            'AnaLabAprobado' => ('NO'),
            'AnaLabDisponible' => $request->get('AnaLabDisponible')
        ));
        $laboratorioAnalisi->save();
        return redirect('labanalisis');
    }

    public function update($key,Request $request){
        DB::table('laboratorioanalisis')
            ->where('LanAnaCodigo', $key)
            ->update(['AnaLabPrecio' => $request->get('AnaLabPrecio2')]);
        DB::table('laboratorioanalisis')
            ->where('LanAnaCodigo', $key)
            ->update(['AnaLabDisponible' => $request->get('AnaLabDisponible2')]);
        DB::table('laboratorioanalisis')
            ->where('LanAnaCodigo', $key)
            ->update(['AnaLabTiempo' => $request->get('AnaLabTiempo2')]);
        return redirect('labanalisis');
    }

}

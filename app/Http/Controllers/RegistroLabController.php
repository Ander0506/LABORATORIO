<?php


namespace App\Http\Controllers;

use App\Laboratorio;
use Illuminate\Http\Request;

class RegistroLabController extends Controller
{
    public function index()
    {

        return  view('RegistroLab');
    }

    public function store(Request $request)
    {
        $laboratorio = new Laboratorio(array(
            'LabImg' => request()->LabImg->storeAs('uploads/img', request()->LabImg->getClientOriginalName()),
            'LabNombre' => $request->get('LabNombre'),
            'LabIdentificacion' => $request->get('LabIdentificacion'),
            'LabDesc' => $request->get('LabDesc'),
            'LabDireccion' => $request->get('LabDireccion'),
            'LabTelefono' => $request->get('LabTelefono'),
            'LabEmail' => $request->get('LabEmail'),
            'LabUsuario' => $request->get('LabUsuario'),
            'LabPass' => $request->get('LabPass'),
            'LabCertificacion' => $request->get('LabCertificacion')
        ));
        $laboratorio->save();
        return 'Datos guardados';
    }

    public function login(Request $request)
    {
        $laboratorio = Laboratorio::where('LabUsuario', $request->get('LabUsuario'))->get();
        return  view('gestion');

    }
}

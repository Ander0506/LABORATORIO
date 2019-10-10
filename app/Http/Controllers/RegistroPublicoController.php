<?php


namespace App\Http\Controllers;
use App\Usuario;
use Illuminate\Http\Request;

class RegistroPublicoController extends Controller
{
    public function index()
    {

        return  view('RegistroPublico');
    }

    public function store(Request $request)
    {
        $usuario = new Usuario(array(
            'UsuNombre' => $request->get('UsuNombre'),
            'UsuIdentificacion' => $request->get('UsuIdentificacion'),
            'UsuCargo' => $request->get('UsuCargo'),
            'UsuDireccion' => $request->get('UsuDireccion'),
            'UsuTelefono' => $request->get('UsuTelefono'),
            'UsuEmail' => $request->get('UsuEmail'),
            'UsuUsuario' => $request->get('UsuUsuario'),
            'UsuPass' => $request->get('UsuPass')
        ));
        $usuario->save();
        return 'Datos guardados';
    }
}

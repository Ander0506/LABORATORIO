<?php


namespace App\Http\Controllers;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
            'password' => Hash::make($request->get('password'))
        ));
        $usuario->save();
        return view('home');
    }

    public function login(Request $request)
    {
        $usuario = Usuario::where('UsuUsuario', $request->get('UsuUsuario'))->get();
         return $usuario;

    }
}

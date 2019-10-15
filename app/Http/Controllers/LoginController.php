<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    use AuthenticatesUsers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('guest', ['only' => 'index']);
    }

    public function index()
    {
        return view('auth.login');

    }

    public  function login($id = "", Request $request){
        if ($id == 'usuario'){
            $usuario = Usuario::where('UsuUsuario', $request->get('UsuUsuario'))
                ->where('UsuPass', $request->get('UsuPass'))->get();
            if (!empty($usuario[0]->UsuCodigo)){
                return redirect('gestion');
            }else{
                return 'Usuario o contraseña incorrectos';
            }
        }

        if($id == 'laboratorio'){

            $credentials = $this->validate(request(), [
                'LabUsuario' => 'required|string',
                'password' => 'required|string'
            ]);

            //$credentials['LabPass'] = Hash::make($request->get('LabPass'));

            if(Auth::guard('laboratorio')->attempt($credentials)){

                return var_dump(Auth::check());
//                return redirect('home');
            }

            return back()
                ->withErrors(['LabUsuario' => trans('auth.failed')])
                ->withInput(request(['LabUsuario']));


           /* $laboratorio = Laboratorio::where('LabUsuario', $request->get('LabUsuario'))
                ->where('LabPass', $request->get('LabPass'))->get();
            $labCodigo = $laboratorio[0]->LabCodigo;
            if(!empty($labCodigo)){
                return redirect('gestion/'.$labCodigo);
            }else{
                return 'Usuario o contraseña incorrectos';
            }*/
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

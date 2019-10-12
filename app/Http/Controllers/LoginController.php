<?php

namespace App\Http\Controllers;

use App\Laboratorio;
use App\Usuario;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    public  function autentication($id = "", Request $request){
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
            $laboratorio = Laboratorio::where('LabUsuario', $request->get('LabUsuario'))
                ->where('LabPass', $request->get('LabPass'))->get();
            $labCodigo = $laboratorio[0]->LabCodigo;
            if(!empty($labCodigo)){
                return redirect('gestion/'.$labCodigo);
            }else{
                return 'Usuario o contraseña incorrectos';
            }
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

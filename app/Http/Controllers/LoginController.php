<?php

namespace App\Http\Controllers;

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
        $this->middleware('guest:laboratorio');
        $this->middleware('guest:usuario');
    }

    public function index()
    {
        return view('auth.login');

    }

    public  function login($id = "", Request $request){
        if ($id == 'usuario'){

            $credentials = $this->validate(request(), [
                'UsuUsuario' => 'required|string',
                'password' => 'required|string'
            ]);

            if(Auth::guard('usuario')->attempt($credentials)){

                return redirect('gestionusuario');
            }

            return back()
                ->withErrors(['UsuUsuario' => trans('auth.failed')])
                ->withInput(request(['UsuUsuario']));

        }

        if($id == 'laboratorio'){

            $credentials = $this->validate(request(), [
                'LabUsuario' => 'required|string',
                'password' => 'required|string'
            ]);

            if(Auth::guard('laboratorio')->attempt($credentials)){

                return redirect('gestion');
            }

            return back()
                ->withErrors(['LabUsuario' => trans('auth.failed')])
                ->withInput(request(['LabUsuario']));
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

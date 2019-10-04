<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $usuarios = Usuario::get();
       return  view('About',compact('usuarios'));
    }
}

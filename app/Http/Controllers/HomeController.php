<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $usuarios = array(
            ['nombre'   =>  'Anderson'],
            ['nombre'   =>  'Jairo'],
            ['nombre'   =>  'Jhonnathan']
        );

        $laboratorios = array(
            ['nombre'   =>  'MNJ'],
            ['nombre'   =>  'KJI'],
            ['nombre'   =>  'PIRE']
        );

        return view('Home', compact('usuarios', 'laboratorios'));
    }
}

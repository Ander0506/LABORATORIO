<?php


namespace App\Http\Controllers;

use App\Usuariolaboratorio;
use Illuminate\Http\Request;

class GestionController extends Controller
{
    public function index()
    {
        $usuariolaboratorios  = Usuariolaboratorio::all();
        return  view('Gestion')->with('usuariolaboratorios',$usuariolaboratorios);
    }

}

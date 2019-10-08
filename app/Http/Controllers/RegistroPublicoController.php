<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroPublicoController extends Controller
{
    public function index()
    {

        return  view('RegistroPublico');
    }
}

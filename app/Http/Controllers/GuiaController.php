<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class GuiaController extends Controller
{
    public function index()
    {
        return  view('Guia');
    }
}

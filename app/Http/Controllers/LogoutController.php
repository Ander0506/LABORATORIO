<?php
/**
 * Created by PhpStorm.
 * User: MERLIS
 * Date: 30/10/2019
 * Time: 10:35 PM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(Request $request){

        Auth::guard('usuario')->logout();
        Auth::guard('laboratorio')->logout();

        $request->session()->invalidate();

        return redirect('/');
    }

}
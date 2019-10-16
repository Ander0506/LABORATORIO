<?php
/**
 * Created by PhpStorm.
 * User: Anderson
 * Date: 16/10/2019
 * Time: 1:38 PM
 */

namespace App\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario  extends Authenticatable
{
    protected $table = 'usuario';
    protected $primaryKey = 'UsuCodigo';
}

<?php
/**
 * Created by PhpStorm.
 * User: MERLIS
 * Date: 13/10/2019
 * Time: 5:11 PM
 */

namespace App\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Laboratorio extends Authenticatable
{
    use Notifiable;

    protected $table = 'laboratorio';
    protected $primaryKey = 'LabCodigo';
}

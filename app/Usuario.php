<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $guarded = ['UsuCodigo', 'UsuImage'];
}

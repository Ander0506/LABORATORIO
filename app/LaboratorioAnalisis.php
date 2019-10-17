<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class LaboratorioAnalisis extends Model
{
    protected $table = 'laboratorioanalisis';
    protected $guarded = ['LanAnaCodigo'];
}

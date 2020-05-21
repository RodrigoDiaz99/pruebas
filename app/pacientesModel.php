<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pacientesModel extends Model
{
    //use SoftDeletes;

    protected $table = 'pacientes';
    protected $fillable = ['id_paciente'];
}

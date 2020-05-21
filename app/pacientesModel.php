<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pacientesModel extends Model
{
    protected $table = 'pacientes';
    protected $primaryKey = 'id_paciente';
    protected $fillable = ['id_paciente'];
}

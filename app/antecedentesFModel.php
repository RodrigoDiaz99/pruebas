<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class antecedentesFModel extends Model
{
    protected $table = 'antecedentesfamiliares';
    protected $primaryKey = 'id_antecedentesfamiliares';
    protected $fillable = ['id_antecedentesfamiliares'];
}

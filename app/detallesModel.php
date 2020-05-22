<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detallesModel extends Model
{
    protected $table = 'expediente';
    protected $primaryKey = 'id_expediente';
    protected $fillable = ['id_expediente'];}

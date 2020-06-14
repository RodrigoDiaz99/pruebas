<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class antecedentesPModel extends Model
{
    protected $table = 'antecedentespersonales';
    protected $primaryKey = 'id_antecedentespersonales';
    protected $fillable = ['id_antecedentespersonales'];
}

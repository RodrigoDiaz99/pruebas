<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoriaModel extends Model
{
    protected $table = 'categoria';
    protected $primaryKey = 'id_categoria';
    protected $fillable = ['id_categoria'];
}

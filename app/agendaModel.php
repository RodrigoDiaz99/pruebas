<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agendaModel extends Model
{
    //
    protected $table = 'agenda';
    protected $primaryKey = 'id_agenda';
    protected $fillable = ['id_agenda'];
}

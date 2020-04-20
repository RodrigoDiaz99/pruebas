<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\pacientesModel;

class PacientesController extends Controller
{
    //


    function consultaUsers(){



        $readpaciente = pacientesModel::all();
        return view('expediente', ['readpaciente'=>$readpaciente]);

    }
}

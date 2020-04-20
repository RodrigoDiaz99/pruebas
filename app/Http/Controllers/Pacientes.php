<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\paciente;

class Pacientes extends Controller
{
    //


    function consultaUsers(){
        $data = paciente::all();




        return view('pruebadb', ['readpaciente'=>$data]);

    }
}

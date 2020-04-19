<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pacientes extends Controller
{
    //
    function consultaUsers(){
        $descripcionpaciente=DB::select('select * from descripcionpaciente');

        echo "chi";
        return view('pruebadb', $descripcionpaciente);

    }
}

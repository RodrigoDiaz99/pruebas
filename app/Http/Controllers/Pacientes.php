<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pacientes extends Controller
{
    //
    function checkDb(){
        $descripcionpaciente=DB::select('select * from descripcionpaciente');
        print_r($descripcionpaciente);

        echo "chi";
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pacientes extends Controller
{
    //
    function checkDb(){
        $user=DB::select('select * from pacientes');
        echo "chi";
        print_r($descripcionpaciente);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\pacientesModel;
class pacientesController extends Controller
{
    //

    function cargaPacientes(){
        
        $cargarTabla = pacientesModel::all();
        return view('expediente', ['tablaPaciente'=>$cargarTabla]);
    }
}

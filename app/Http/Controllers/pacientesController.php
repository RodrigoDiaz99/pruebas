<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\pacientesModel;

class pacientesController extends Controller
{

    function cargaPacientes()
    {

        //$cargarTabla = pacientesModel::all(); //carga toda la tabla
        // $cargarTabla = pacientesModel::where('nombre','Kenn')->get(); //prueba de where, si funciona
        $cargarTabla = pacientesModel::select('nombre')->get(); //solo cargar col "nombre"
        return view('expediente', ['tablaPaciente' => $cargarTabla]);
    }
}

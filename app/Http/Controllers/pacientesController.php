<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\pacientesModel;

class pacientesController extends Controller
{

    function cargaPacientes()
    {

        // $cargarTabla = pacientesModel::all(); //carga toda la tabla, incluso sin usar
        // $cargarTabla = pacientesModel::where('nombre','Kenn')->get(); //prueba de where
        // $cargarTabla = pacientesModel::select('nombre')->get(); //solo cargar col "nombre" usando SELECT
        $cargarTabla = pacientesModel::select('nombre', 'apep', 'apem', 'edad')->get(); //usando SELECT

        return view('expediente', ['tablaPaciente' => $cargarTabla]);
    }
}

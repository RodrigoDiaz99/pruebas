<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\pacientesModel;
use App\detallesModel;


class pacientesController extends Controller
{

    function cargaPacientes()
    { 

        // $casrgarTabla = pacientesModel::all(); //carga toda la tabla, incluso sin usar
        // $cargarTabla = pacientesModel::where('nombre','Kenn')->get(); //prueba de where
        // $cargarTabla = pacientesModel::select('nombre')->get(); //solo cargar col "nombre" usando SELECT
        $cargarTabla = pacientesModel::select('id_paciente', 'nombre_paciente', 'apellido_paterno', 'apellido_materno', 'edad')->get(); //usando SELECT

        return view('expediente', ['tablaPaciente' => $cargarTabla]);
    }

    function detalleExpediente($id)
    {


        $cargarTabla = detallesModel::select('nombre_paciente', 'apellido_paterno', 'apellido_materno', 'edad'); //usando SELECT
        $cargarTabla = detallesModel::where('id_paciente', $id)->get(); //usando SELECT


        return view('detalleexp', ['tablaDetalles' => $cargarTabla]);
    }


}

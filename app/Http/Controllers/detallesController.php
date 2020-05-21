<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\detallesModel;

class detallesController extends Controller
{

    //peroprimodigalookaventura

    function cargaDetalles($id)
    {


        $cargarTabla = detallesModel::select('nombre_paciente', 'apellido_paterno', 'apellido_materno', 'edad'); //usando SELECT
        $cargarTabla = detallesModel::where('id_paciente', $id)->get(); //usando SELECT


        return view('detalleexp', ['tablaDetalles' => $cargarTabla]);
    }

    
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\detallesModel;

class detallesController extends Controller
{

    //peroprimodigalookaventura

    function cargaDetalles()
    {


        $cargarTabla = detallesModel::select('nombre_paciente', 'apellido_paterno', 'apellido_materno', 'edad')->get(); //usando SELECT

        return view('detalleexpediente', ['tablaPaciente' => $cargarTabla]);
    }
}

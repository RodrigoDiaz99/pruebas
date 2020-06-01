<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\descPacientesModel;

class descPacientesController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    function consultaDescPacientes()
    {

        $readpaciente = descPacientesModel::all();
        return view('expediente', ['readpaciente' => $readpaciente]);
    }
}

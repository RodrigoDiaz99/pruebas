<?php

namespace App\Http\Controllers;

use App\pacientesModel;
use App\detallesModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class pacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = pacientesModel::paginate(1000000);
<<<<<<< HEAD
        $expediente = detallesModel::paginate(1000000);
        return view('pacientes', compact('pacientes', 'expediente'));
=======
         return view('registerp',compact('pacientes'));
>>>>>>> parent of 306c9fd... limpieza
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosPaciente = [
            'nombre_paciente' => $request->nombre,
            'apellido_paterno' => $request->app,
            'apellido_materno' => $request->apm,
            'edad' => $request->edad
        ];

        
        pacientesModel::insert($datosPaciente);
      

        return redirect()->route('registro-paciente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
<<<<<<< HEAD
        $pacientes = pacientesModel::find($id); //el cliente de aca es el mismo que el de abajo
        $expediente = detallesModel::find($id); //el cliente de aca es el mismo que el de abajo

        return view('detalleexp', compact('pacientes', 'expediente'));
=======
      

>>>>>>> parent of 306c9fd... limpieza
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

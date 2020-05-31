<?php

namespace App\Http\Controllers;

use App\Paciente;

use Illuminate\Http\Request;

class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pacientes=Paciente::all();

        return view ("pacientes.index", compact("pacientes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("pacientes.create");
        
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
        
        $paciente= new paciente;
        //utiliar instancia para apuntar a paciente
        $paciente->primer_nombre=$request->primer_nombre;
        $paciente->segundo_nombre=$request->segundo_nombre;
        $paciente->primer_apelido=$request->primer_apelido;
        $paciente->segundo_apelido=$request->segundo_apelido;   
        $paciente->documento=$request->documento;   
        $paciente->correo=$request->correo;   
        $paciente->telefono=$request->telefono;   

        $paciente->save();
        
        return redirect("/pacientes");

        
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
        $paciente=Paciente::findOrFail($id);

        return view("pacientes.show", compact("paciente"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $paciente=Paciente::findOrFail($id);

        return view("pacientes.edit", compact("paciente"));
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
        $paciente=Paciente::findOrFail($id);

        $paciente->update($request->all());

        return redirect("/pacientes");
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
        $paciente=Paciente::findOrFail($id);

        $paciente->delete();

        return redirect("/pacientes");

        

        
    }
}

<?php

namespace App\Http\Controllers;

use App\Cita;

use Illuminate\Http\Request;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $citas=Cita::all();

        return view ("citas.index", compact("citas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("citas.create");
        
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
        
        $cita= new cita;
        //utiliar instancia para apuntar a cita
        $cita->fecha=$request->fecha;
        $cita->hora=$request->hora;
        $cita->id_medico=$request->id_medico;
        $cita->id_paciente=$request->id_paciente;   
        
        $cita->save();
        
        return redirect("/citas");

        
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
        $cita=Cita::findOrFail($id);

        return view("citas.show", compact("cita"));
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
        $cita=Cita::findOrFail($id);

        return view("citas.edit", compact("cita"));
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
        $cita=Cita::findOrFail($id);

        $cita->update($request->all());

        return redirect("/citas");
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
        $cita=Cita::findOrFail($id);

        $cita->delete();

        return redirect("/citas");

        

        
    }
}

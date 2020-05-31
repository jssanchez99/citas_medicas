@extends("../layout.plantilla")

@section("cabecera")

EDITAR REGISTROS

@endsection

@section("contenido")
<div class="container-fluid">

  <form method="post" action="/citas/{{$cita->id}}">

          {{csrf_field()}} 

    <input type="hidden" name="_method" value="PUT">

    <div class="form-group">
      <label for="fecha">Fecha</label>
      <input name="fecha" value="{{$cita->fecha}}" type="date" class="form-control" id="fecha">
    </div>

    <div class="form-group">
      <label for="hora">hora:</label>
      <input name="hora" value="{{$cita->hora}}" type="time" class="form-control" id="hora">
    </div>

    <div class="form-group">
      <label for="medico">medico</label>
      <input name="id_medico" value="{{$cita->id_medico}}" type="text" class="form-control" id="medico">
    </div>

    <div class="form-group">
      <label for="paciente">paciente</label>
      <input name="id_paciente" value="{{$cita->id_paciente}}" type="text" class="form-control" id="paciente">
    </div>

    <button type="submit" class="btn btn-success">Editar</button>

  </form> 

  <form method="post" action="/citas/{{$cita->id}}">
  {{csrf_field()}} 

    <input type="hidden" name="_method" value="DELETE">

    <button type="submit" class="btn btn-danger">Eliminar Registro</button>

</div>
    
    
    

    @endsection
@extends("../layout.plantilla")

@section("cabecera")

AGENDAR CITAS

@endsection

@section("contenido")
<div class="container-fluid">

  <form method="post" action="/citas">

          {{csrf_field()}} 

    <div class="form-group">
      <label for="fecha">Fecha de la cita:</label>
      <input name="fecha"  type="date" class="form-control" id="fecha">
    </div>

    <div class="form-group">
      <label for="hora">Hora de la cita:</label>
      <input name="hora" type="time" class="form-control" id="hora">
    </div>

    <div class="form-group">
      <label for="medico">Documento del Medico</label>
      <input name="id_medico" type="text" class="form-control" id="medico">
    </div>

    <div class="form-group">
      <label for="paciente">Documento del Paciente</label>
      <input name="id_paciente" type="text" class="form-control" id="paciente">
    </div>

    <button type="submit" class="btn btn-success">Enviar</button>

  </form> 
</div>
    
    
    

    @endsection
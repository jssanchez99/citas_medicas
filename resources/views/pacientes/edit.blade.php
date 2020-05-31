@extends("../layout.plantilla")

@section("cabecera")

EDITAR REGISTROS

@endsection

@section("contenido")
<div class="container-fluid">

  <form method="post" action="/pacientes/{{$paciente->id}}">

    {{csrf_field()}} 

    <input type="hidden" name="_method" value="PUT">

    <div class="form-group">
      <label for="primer_nombre">Primer Nombre:</label>
      <input name="primer_nombre"  type="text" class="form-control" id="primer_nombre">
    </div>

    <div class="form-group">
      <label for="segundo_nombre">Segundo Nombre:</label>
      <input name="segundo_nombre"  type="text" class="form-control" id="segundo_nombre">
    </div>

    <div class="form-group">
      <label for="primer_apelido">Primer Apellido:</label>
      <input name="primer_apelido"  type="text" class="form-control" id="primer_apelido">
    </div>

    <div class="form-group">
      <label for="segundo_apelido">Segundo Apellido:</label>
      <input name="segundo_apelido"  type="text" class="form-control" id="segundo_apelido">
    </div>

    <div class="form-group">
      <label for="documento">Documento:</label>
      <input name="documento"  type="text" class="form-control" id="documento">
    </div>

    <div class="form-group">
      <label for="correo">Correo:</label>
      <input name="correo"  type="text" class="form-control" id="correo">
    </div>

    <div class="form-group">
      <label for="telefono">Telefono:</label>
      <input name="telefono"  type="text" class="form-control" id="telefono">
    </div>

    <button type="submit" class="btn btn-success">Editar</button>

  </form> 

  <form method="post" action="/pacientes/{{$paciente->id}}">
  {{csrf_field()}} 

    <input type="hidden" name="_method" value="DELETE">

    <button type="submit" class="btn btn-danger">Eliminar Registro</button>

</div>
    
    
    

    @endsection
@extends("../layout.plantilla")

@section("cabecera")
PACIENTES

@endsection

@section("contenido")

<div class="container">
  <h2></h2>
  <p>Los pacientes que existen en nuestra base de datos son los siguientes:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Numero</th>
        <th>Primer Nombre</th>
        <th>Segundo Nombre</th>
        <th>Primer Apellido</th>
        <th>Segundo Apellido</th>
        <th>Documento</th>
        <th>Correo</th>
        <th>Telefono</th>
      </tr>
    </thead>
    <tbody>
    @foreach($pacientes as $paciente)
  <tr>
      <td><a href="{{route('pacientes.edit', $paciente->id)}}">{{$paciente->id}}</a></td>
      <td>{{$paciente->primer_nombre}}</td>
      <td>{{$paciente->segundo_nombre}}</td>
      <td>{{$paciente->primer_apelido}}</td>
      <td>{{$paciente->segundo_apelido}}</td>
      <td>{{$paciente->documento}}</td>
      <td>{{$paciente->correo}}</td>
      <td>{{$paciente->telefono}}</td>
  </tr>
  @endforeach
      
    </tbody>
  </table>
</div>
@endsection

@extends("../layout.plantilla")

@section("cabecera")


@endsection

@section("contenido")

<div class="container">
  <h2>Citas</h2>
  <p>Las siguientes son las citas que se han asignado hasta ahora:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Documento del medico</th>
        <th>Documento del paciente</th>
        <th>Fecha de la cita</th>
        <th>Hora de la cita</th>
      </tr>
    </thead>
    <tbody>
    @foreach($citas as $cita)
  <tr>
    <td><a href="{{route('citas.edit', $cita->id)}}">{{$cita->id_medico}}</a></td>
    <td>{{$cita->id_paciente}}</td>
    <td>{{$cita->fecha}}</td>
    <td>{{$cita->hora}}</td>
  </tr>
  @endforeach
      
    </tbody>
  </table>
</div>
@endsection

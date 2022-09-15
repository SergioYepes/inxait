@extends('layouts.template')
@section("botton")

    <nav class="nav justify-content-center">   
      <a class="btn btn-success btn-lg text-uppercase" role="button" href="{{url("/concursantes/create")}}">Formulario</a>
    </nav> </br> </br>

@endsection
@section("ganador")
<nav class="nav justify-content-center">   
    <a class="btn btn-success btn-lg text-uppercase" role="button" href="{{url("/ganador-sorteos")}}">Ganadores</a>
  </nav>
@endsection
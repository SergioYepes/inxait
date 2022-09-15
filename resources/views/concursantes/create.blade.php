@extends('layouts.copy')

@section('content')
<div class="container">
<form action="{{ url("/concursantes")}}" method="POST" >
@csrf
    @include("concursantes.formulario",["modo"=>"Crear"])
    <div class="form-group">
        <input type="checkbox" name="habeas_data" id="habeas_data" value="1">
        <label for="habeas_data">Acepta nuestros terminos de confidencialidad</label>
    </div>
</form>
</div>
@endsection
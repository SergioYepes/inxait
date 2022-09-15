@extends('layouts.copy')

@section('content')
<div class="container">
<form action="{{ url("/concursantes/".$concursante->id)}}" method="post">
    @csrf
    {{ method_field ('PATCH')}}
    @include("concursantes.formulario",["modo"=>"Editar"])
</form>
@endsection

@extends('layouts.copy')

@section('content')
<div class="container">
@if(Session::has("mensaje"))
    <div class="alert alert-success alert-dismissible" role="alert">
            {{Session::get("mensaje")}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
 @endif

<a href="{{url("/concursantes/create")}}" class="btn btn-success">Registrar Nuevo Concursante</a>
<br/> <br/> <br/>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cedula</th> 
            <th>Departamento</th>
            <th>Ciudad</th>
            <th>Celular</th>
            <th>Correo</th>
            
            <th>Acciones</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($concursantes as $concursante)
        <tr>
            <td>{{$concursante->id}}</td>
            <td>{{$concursante->nombre}}</td>
            <td>{{$concursante->apellido}}</td>
            <td>{{$concursante->cedula}}</td>
            <td>{{$concursante->departamento}}</td>
            <td>{{$concursante->ciudad}}</td>
            <td>{{$concursante->celular}}</td>
            <td>{{$concursante->correo}}</td>
            <td>
                
                <a href="{{url("/concursantes/".$concursante->id."/edit")}}" class="btn btn-warning">Editar</a>

                | 
                {{-- metodo para borrar de la db --}}
                  <form action="{{url("/concursantes/".$concursante->id)}}" method="post" class="d-inline">
                    @csrf
                    {{method_field("DELETE")}}
                    <input type="submit" onclick="return confirm('¿quieres borrar?')" value="borrar" class="btn btn-danger">
                </form>

            </td>
        </tr>
        @endforeach 
    </tbody>
</table>
{{-- {!! $concursantes->links() !!} --}}
</div>
@endsection 
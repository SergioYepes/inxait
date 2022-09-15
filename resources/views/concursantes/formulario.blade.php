    <h1>{{$modo}}</h1>

    @if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="<div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" class="form-control"> </br>
    </div>
    <div class="<div class="form-group">
        <label for="apellido">apellido:</label>
        <input type="text" name="apellido" id="apellido" class="form-control"> </br>
    </div>
    <div class="<div class="form-group">
        <label for="cedula">cedula:</label>
        <input type="text" name="cedula" id="cedula" class="form-control"></br>
    </div>
    <div class="<div class="form-group">
        <label for="departamento">departamento:</label>
        <select  name="departamento" id="departamento" class="form-control">
            @foreach($post as $citi)
            <option value="{{$citi["departamento"]}}">{{$citi["departamento"]}}</option>   
            @endforeach
        </select></br>
    </div>
    <div class="<div class="form-group">
        <label for="ciudad">ciudad:</label>
        <select  name="ciudad" id="ciudad" class="form-control"/>
            @foreach($post as $citi)
                @foreach($citi["ciudades"] as $value)
                    <option >{{$value}}</option>
                @endforeach
            @endforeach  
        </select></br>
    </div>
    <div class="<div class="form-group">
        <label for="celular">celular:</label>
        <input type="text" name="celular" id="celular" class="form-control"></br>
    </div>
    <div class="<div class="form-group">
        <label for="correo">correo:</label>
        <input type="text" name="correo" id="correo" class="form-control"></br>
    </div>
    
    <input type="submit" value="{{$modo}}" class="btn btn-primary">
    
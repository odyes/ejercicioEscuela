<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar alumno</title>
    
</head>
<body>
    
    <h1>Editar alumno</h1>
    @if(Session::has('exito'))
        <p>{{Session::get('exito')}}</p> 
    @endif 
    <a href="{{route('alumnos.index')}}"> Volver a la lista de alumnos</a>
    <form action="{{route('alumnos.update', $alumno->id)}}" method="POST">
        @csrf
        @method('put')  
        <div>
            <label>Nombre: </label>
            <input type="text" name="nombre" value="{{$alumno->nombre}}">
        </div>
        <div>
            <button type="submit">Actualizar alumno</button>
        </div>
    </form>
</body>
</html>
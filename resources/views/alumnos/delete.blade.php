<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar alumno</title>
</head>
<body>
    <h1>Eliminar alumnos</h1>
    <p>Esta seguro de elimar a <strong>{{$alumno->nombre}}</strong></p>
    <form action="{{route('alumnos.destroy', $alumno->id)}}" method="POST">
        @csrf 
        @method('delete')
        <button type="submit">Si</button>
        <a href="{{route('alumnos.index')}}">Cancelar</a>
    </form>
</body>
</html>
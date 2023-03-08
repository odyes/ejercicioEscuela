<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Carrera;

class AlumnosController extends Controller
{
    //
    public function index(){
        $alumnos = Alumno::all();
        $argumentos = array();
        $argumentos['alumnos'] = $alumnos;

        return view('alumnos.index',$argumentos);   
    }

    public function create(){
        $argumentos = array();
        $carreras = Carrera::all();
        $argumentos['carreras']=$carreras;
        return view('alumnos.create', $argumentos);
    }

    public function store(Request $request){
        $nuevoAlumno = new Alumno();
        $nuevoAlumno->nombre = $request->input('nombre');
        $nuevoAlumno->save();
        //Hacer que nos regrese al index

        return redirect()->route('alumnos.index')
            ->with('exito', 'Alumno creado exitosamente');
    }

    //Estamos recibiendo paràmetros de ruta a traves de parametrtos de funciòn
    public function edit($id){
        $alumno = Alumno::find($id);
        $argumentos = array();
        $argumentos['alumno']=$alumno;
        return view('alumnos.edit', $argumentos);
    }

    public function update(Request $request, $id){  //request es para extraer lo que el usuario pone en el formulario
        //Buscar al alumno
        $alumno = Alumno::find($id);
        //Actualiza sus datps en base a los valores del form
        $alumno->nombre = $request->input('nombre');

        $alumno->save();
        return redirect()->route('alumnos.edit', $id)
            -> with('exito', 'El alumno se ha actualizado exitosamente');
            //hola
    }

    public function delete($id){ 
        $alumno = Alumno::find($id);
        $argumentos = array();
        $argumentos['alumno']=$alumno;
        return view('alumnos.delete', $argumentos);
    }

    public function destroy(Request $request, $id){ 
        $alumno = Alumno::find($id);
        $feedback = "Se elimino correctamente a: ". $alumno->nombre;
        $alumno->delete();

        return redirect()->route('alumnos.index')
            ->with('exito', $feedback);
    }

}

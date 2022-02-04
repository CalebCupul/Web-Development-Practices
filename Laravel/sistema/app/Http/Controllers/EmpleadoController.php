<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['empleados']=Empleado::paginate(5);
        return view('empleado.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $datosEmpleado = request()->all();
        $datosEmpleado = request()->except('_token');

        if($request->hasFile('Foto')){
            $datosEmpleado['Foto']=$request->file('Foto')->store('uploads', 'public');
        }

        Empleado::insert($datosEmpleado);
        // return response()->json($datosEmpleado);
        return redirect('empleado')->with('mensaje','Empleado agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Busca la informacion por id
        $empleado = Empleado::findOrFail($id);

        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Guarda los datos en $datosEmpleado a excepcion del token
        // y el metodo 
        $datosEmpleado = request()->except('_token','_method');
        
        if($request->hasFile('Foto')){
            // Busca al usuario por Id y borra la foto del storage
            $empleado = Empleado::findOrFail($id);
            Storage::delete('public/'.$empleado->Foto);

            // Actualiza la nueva foto del usuario
            $datosEmpleado['Foto']=$request->file('Foto')->store('uploads', 'public');
        }

        //Busca el empleado por id, y actualiza sus datos guardados
        //en $$datosEmpleado
        Empleado::where('id','=',$id)->update($datosEmpleado);

        
 
        $empleado = Empleado::findorFail($id);
        //Muestra en la vista los datos actualizados del empleado
        return view('empleado.edit', compact('empleado'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // Busca el registro del usuario
        $empleado = Empleado::findOrFail($id);

        // Elimina la foto dentro de la carpeta
        if(Storage::delete('public/'.$empleado->Foto)){
            // Elimina el usuario
            Empleado::destroy($id);
        }

        
        return redirect('empleado')->with('mensaje','Empleado eliminado con exito');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use Illuminate\Support\Facades\Auth;

class EmpleadoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkRole:admin')->except('index', 'show');
    }

    public function index()
    {
        if (Auth::user()->role === 'admin') {
            $empleados = Empleado::all();
        } else {
            $empleados = Empleado::where('user_id', Auth::id())->get();
        }

        return view('empleados', compact('empleados'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'correo_electronico' => 'required|email',
            'cargo' => 'required',
            'salario' => 'required|numeric',
            'fotografia' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validación para la imagen
        ]);
    
        // Procesar la carga de la imagen
        if ($request->hasFile('fotografia')) {
            $imagePath = $request->file('fotografia')->store('fotos_perfil');
        } else {
            $imagePath = null;
        }


        $empleado = new Empleado([
            'nombre' => $request->get('nombre'),
            'apellido' => $request->get('apellido'),
            'correo_electronico' => $request->get('correo_electronico'),
            'cargo' => $request->get('cargo'),
            'salario' => $request->get('salario'),
            'fotografia' => $imagePath,
            'user_id' => Auth::id(),
        ]);

        $empleado->save();

        // Manejar la carga de la imagen y guardar la ruta en la base de datos
        if ($request->hasFile('fotografia')) {
            $empleado->guardarFotoPerfil($request->file('fotografia'));
        }

        return redirect('/empleados')->with('success', 'Empleado agregado correctamente');
    }

    public function show($id)
    {
        $empleado = Empleado::findOrFail($id);
        return view('show', compact('empleado'));
    }

    public function edit($id)
    {
        $empleado = Empleado::findOrFail($id);
        return view('edit', compact('empleado'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'correo_electronico' => 'required|email',
            'cargo' => 'required',
            'salario' => 'required|numeric',
        ]);

        if ($request->hasFile('fotografia')) {
            $imagePath = $request->file('fotografia')->store('fotos_perfil');
        } else {
            $imagePath = null;
        }

        $empleado = Empleado::findOrFail($id);
        $empleado->nombre = $request->get('nombre');
        $empleado->apellido = $request->get('apellido');
        $empleado->correo_electronico = $request->get('correo_electronico');
        $empleado->cargo = $request->get('cargo');
        $empleado->salario = $request->get('salario');
        $empleado->fotografia = $imagePath;
        $empleado->save();

        return redirect('/empleados')->with('success', 'Empleado actualizado correctamente');
    }

    public function destroy($id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->delete();

        return redirect('/empleados')->with('success', 'Empleado eliminado correctamente');
    }
}

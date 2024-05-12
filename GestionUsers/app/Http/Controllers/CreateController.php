<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Empleado;
use Illuminate\Support\Facades\Hash;

class CreateController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string',
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'correo_electronico_empleado' => 'required|email',
            'cargo' => 'required|string',
            'salario' => 'required|numeric',
        ]);

        // Crear el usuario
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        // Crear el empleado asociado al usuario
        $empleado = new Empleado([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'correo_electronico' => $request->correo_electronico_empleado,
            'cargo' => $request->cargo,
            'salario' => $request->salario,
        ]);
        
        $user->empleado()->save($empleado);

        return redirect()->route('dashboard')->with('success', 'Usuario y empleado creados correctamente.');
    }
}

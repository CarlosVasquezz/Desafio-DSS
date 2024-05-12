<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    public $timestamps = false;

    protected $table = 'employees';

    protected $fillable = ['nombre', 'apellido', 'correo_electronico', 'cargo', 'salario', 'fotografia', 'user_id'];

    public function guardarFotoPerfil($imagen)
    {
        $rutaImagen = $imagen->store('fotos_perfil');

        $this->fotografia = $rutaImagen;
        $this->save();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function empleado()
    {
        return $this->hasOne(Empleado::class);
    }
}

<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\CreateUserEmployee;
use App\Models\Empleado;

class CreateUserEmployeeListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(CreateUserEmployee $event)
    {
        $user = $event->user;

        // Crear un nuevo empleado con la información del usuario
        Empleado::create([
            'nombre' => $user->name,
            'correo_electronico' => $user->email,
            'user_id' => $user->id,
        ]);
    }
}


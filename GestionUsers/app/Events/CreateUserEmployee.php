<?php

namespace App\Events;

use App\Models\Empleado;
use App\Models\User;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CreateUserEmployee
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function handle()
    {
        Empleado::create([
            'nombre' => $this->user->name,
            'correo_electronico' => $this->user->email,
            'user_id' => $this->user->id,
        ]);
    }
}

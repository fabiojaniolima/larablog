<?php

namespace App\Observers;

use App\Models\User;
use App\Notifications\NotificarNovoUsuario;

class ObservarUser
{
    /**
     * Listen to the User created event.
     *
     * @param  User  $user
     * @return void
     */
    public function created(User $user)
    {
        $user->notify(new NotificarNovoUsuario());
    }

    /**
     * Listen to the User deleting event.
     *
     * @param  User  $user
     * @return void
     */
    public function deleting(User $user)
    {
        //
    }
}